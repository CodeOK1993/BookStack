<?php

namespace BookStack\Http\Controllers;

use BookStack\Entities\Models\Entity;
use BookStack\Interfaces\Favouritable;
use BookStack\Model;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    /**
     * Add a new item as a favourite.
     */
    public function add(Request $request)
    {
        $favouritable = $this->getValidatedModelFromRequest($request);
        $favouritable->favourites()->firstOrCreate([
            'user_id' => user()->id,
        ]);

        $this->showSuccessNotification(trans('activities.favourite_add_notification', [
            'name' => $favouritable->name,
        ]));
        return redirect()->back();
    }

    /**
     * Remove an item as a favourite.
     */
    public function remove(Request $request)
    {
        $favouritable = $this->getValidatedModelFromRequest($request);
        $favouritable->favourites()->where([
            'user_id' => user()->id,
        ])->delete();

        $this->showSuccessNotification(trans('activities.favourite_remove_notification', [
            'name' => $favouritable->name,
        ]));
        return redirect()->back();
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Exception
     */
    protected function getValidatedModelFromRequest(Request $request): Favouritable
    {
        $modelInfo = $this->validate($request, [
            'type' => 'required|string',
            'id' => 'required|integer',
        ]);

        if (!class_exists($modelInfo['type'])) {
            throw new \Exception('Model not found');
        }

        /** @var Model $model */
        $model = new $modelInfo['type'];
        if (! $model instanceof Favouritable) {
            throw new \Exception('Model not favouritable');
        }

        $modelInstance = $model->newQuery()
            ->where('id', '=', $modelInfo['id'])
            ->first(['id', 'name']);

        $inaccessibleEntity = ($modelInstance instanceof Entity && !userCan('view', $modelInstance));
        if (is_null($modelInstance) || $inaccessibleEntity) {
            throw new \Exception('Model instance not found');
        }

        return $modelInstance;
    }
}
