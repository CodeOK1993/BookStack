<?php namespace Tests\Uploads;

use BookStack\Entities\Repos\PageRepo;
use BookStack\Uploads\Image;
use BookStack\Entities\Page;
use BookStack\Uploads\ImageService;
use Tests\TestCase;

class ImageTest extends TestCase
{

    use UsesImages;

    public function test_image_upload()
    {
        $page = Page::first();
        $admin = $this->getAdmin();
        $this->actingAs($admin);

        $imageName = 'first-image.png';
        $relPath = $this->getTestImagePath('gallery', $imageName);
        $this->deleteImage($relPath);

        $upload = $this->uploadImage($imageName, $page->id);
        $upload->assertStatus(200);

        $this->assertTrue(file_exists(public_path($relPath)), 'Uploaded image not found at path: '. public_path($relPath));

        $this->deleteImage($relPath);

        $this->assertDatabaseHas('images', [
            'url' => $this->baseUrl . $relPath,
            'type' => 'gallery',
            'uploaded_to' => $page->id,
            'path' => $relPath,
            'created_by' => $admin->id,
            'updated_by' => $admin->id,
            'name' => $imageName
        ]);
    }

    public function test_php_files_cannot_be_uploaded()
    {
        $page = Page::first();
        $admin = $this->getAdmin();
        $this->actingAs($admin);

        $fileName = 'bad.php';
        $relPath = $this->getTestImagePath('gallery', $fileName);
        $this->deleteImage($relPath);

        $file = $this->getTestImage($fileName);
        $upload = $this->withHeader('Content-Type', 'image/jpeg')->call('POST', '/images/gallery/upload', ['uploaded_to' => $page->id], [], ['file' => $file], []);
        $upload->assertStatus(302);

        $this->assertFalse(file_exists(public_path($relPath)), 'Uploaded php file was uploaded but should have been stopped');

        $this->assertDatabaseMissing('images', [
            'type' => 'gallery',
            'name' => $fileName
        ]);
    }

    public function test_secure_images_uploads_to_correct_place()
    {
        config()->set('filesystems.default', 'local_secure');
        $this->asEditor();
        $galleryFile = $this->getTestImage('my-secure-test-upload');
        $page = Page::first();
        $expectedPath = storage_path('uploads/images/gallery/' . Date('Y-m-M') . '/my-secure-test-upload');

        $upload = $this->call('POST', '/images/gallery/upload', ['uploaded_to' => $page->id], [], ['file' => $galleryFile], []);
        $upload->assertStatus(200);

        $this->assertTrue(file_exists($expectedPath), 'Uploaded image not found at path: '. $expectedPath);

        if (file_exists($expectedPath)) {
            unlink($expectedPath);
        }
    }

    public function test_secure_images_included_in_exports()
    {
        config()->set('filesystems.default', 'local_secure');
        $this->asEditor();
        $galleryFile = $this->getTestImage('my-secure-test-upload');
        $page = Page::first();
        $expectedPath = storage_path('uploads/images/gallery/' . Date('Y-m-M') . '/my-secure-test-upload');

        $upload = $this->call('POST', '/images/gallery/upload', ['uploaded_to' => $page->id], [], ['file' => $galleryFile], []);
        $imageUrl = json_decode($upload->getContent(), true)['url'];
        $page->html .= "<img src=\"{$imageUrl}\">";
        $page->save();
        $upload->assertStatus(200);

        $encodedImageContent = base64_encode(file_get_contents($expectedPath));
        $export = $this->get($page->getUrl('/export/html'));
        $this->assertTrue(str_contains($export->getContent(), $encodedImageContent), 'Uploaded image in export content');

        if (file_exists($expectedPath)) {
            unlink($expectedPath);
        }
    }

    public function test_system_images_remain_public()
    {
        config()->set('filesystems.default', 'local_secure');
        $this->asEditor();
        $galleryFile = $this->getTestImage('my-system-test-upload');
        $page = Page::first();
        $expectedPath = public_path('uploads/images/system/' . Date('Y-m-M') . '/my-system-test-upload');

        $upload = $this->call('POST', '/images/system/upload', ['uploaded_to' => $page->id], [], ['file' => $galleryFile], []);
        $upload->assertStatus(200);

        $this->assertTrue(file_exists($expectedPath), 'Uploaded image not found at path: '. $expectedPath);

        if (file_exists($expectedPath)) {
            unlink($expectedPath);
        }
    }

    public function test_image_delete()
    {
        $page = Page::first();
        $this->asAdmin();
        $imageName = 'first-image.png';

        $this->uploadImage($imageName, $page->id);
        $image = Image::first();
        $relPath = $this->getTestImagePath('gallery', $imageName);

        $delete = $this->delete( '/images/' . $image->id);
        $delete->assertStatus(200);

        $this->assertDatabaseMissing('images', [
            'url' => $this->baseUrl . $relPath,
            'type' => 'gallery'
        ]);

        $this->assertFalse(file_exists(public_path($relPath)), 'Uploaded image has not been deleted as expected');
    }

    public function testBase64Get()
    {
        $page = Page::first();
        $this->asAdmin();
        $imageName = 'first-image.png';

        $this->uploadImage($imageName, $page->id);
        $image = Image::first();

        $imageGet = $this->getJson("/images/base64/{$image->id}");
        $imageGet->assertJson([
            'content' => 'iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAIAAAACDbGyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4gEcDCo5iYNs+gAAAB1pVFh0Q29tbWVudAAAAAAAQ3JlYXRlZCB3aXRoIEdJTVBkLmUHAAAAFElEQVQI12O0jN/KgASYGFABqXwAZtoBV6Sl3hIAAAAASUVORK5CYII='
        ]);
    }

    public function test_drawing_base64_upload()
    {
        $page = Page::first();
        $editor = $this->getEditor();
        $this->actingAs($editor);

        $upload = $this->postJson('images/drawing/upload', [
            'uploaded_to' => $page->id,
            'image' => 'image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAIAAAACDbGyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4gEcDCo5iYNs+gAAAB1pVFh0Q29tbWVudAAAAAAAQ3JlYXRlZCB3aXRoIEdJTVBkLmUHAAAAFElEQVQI12O0jN/KgASYGFABqXwAZtoBV6Sl3hIAAAAASUVORK5CYII='
        ]);

        $upload->assertStatus(200);
        $upload->assertJson([
            'type' => 'drawio',
            'uploaded_to' => $page->id,
            'created_by' => $editor->id,
            'updated_by' => $editor->id,
        ]);

        $image = Image::where('type', '=', 'drawio')->first();
        $this->assertTrue(file_exists(public_path($image->path)), 'Uploaded image not found at path: '. public_path($image->path));

        $testImageData = file_get_contents($this->getTestImageFilePath());
        $uploadedImageData = file_get_contents(public_path($image->path));
        $this->assertTrue($testImageData === $uploadedImageData, "Uploaded image file data does not match our test image as expected");
    }

    public function test_user_images_deleted_on_user_deletion()
    {
        $editor = $this->getEditor();
        $this->actingAs($editor);

        $imageName = 'profile.png';
        $relPath = $this->getTestImagePath('gallery', $imageName);
        $this->deleteImage($relPath);

        $file = $this->getTestImage($imageName);
        $this->call('POST', '/images/user/upload', [], [], ['file' => $file], []);
        $this->call('POST', '/images/user/upload', [], [], ['file' => $file], []);

        $profileImages = Image::where('type', '=', 'user')->where('created_by', '=', $editor->id)->get();
        $this->assertTrue($profileImages->count() === 2, "Found profile images does not match upload count");

        $userDelete = $this->asAdmin()->delete("/settings/users/{$editor->id}");
        $userDelete->assertStatus(302);
        $this->assertDatabaseMissing('images', [
            'type' => 'user',
            'created_by' => $editor->id
        ]);
    }

    public function test_deleted_unused_images()
    {
        $page = Page::first();
        $admin = $this->getAdmin();
        $this->actingAs($admin);

        $imageName = 'unused-image.png';
        $relPath = $this->getTestImagePath('gallery', $imageName);
        $this->deleteImage($relPath);

        $upload = $this->uploadImage($imageName, $page->id);
        $upload->assertStatus(200);
        $image = Image::where('type', '=', 'gallery')->first();

        $pageRepo = app(PageRepo::class);
        $pageRepo->updatePage($page, $page->book_id, [
            'name' => $page->name,
            'html' => $page->html . "<img src=\"{$image->url}\">",
            'summary' => ''
        ]);

        // Ensure no images are reported as deletable
        $imageService = app(ImageService::class);
        $toDelete = $imageService->deleteUnusedImages(true, true);
        $this->assertCount(0, $toDelete);

        // Save a revision of our page without the image;
        $pageRepo->updatePage($page, $page->book_id, [
            'name' => $page->name,
            'html' => "<p>Hello</p>",
            'summary' => ''
        ]);

        // Ensure revision images are picked up okay
        $imageService = app(ImageService::class);
        $toDelete = $imageService->deleteUnusedImages(true, true);
        $this->assertCount(0, $toDelete);
        $toDelete = $imageService->deleteUnusedImages(false, true);
        $this->assertCount(1, $toDelete);

        // Check image is found when revisions are destroyed
        $page->revisions()->delete();
        $toDelete = $imageService->deleteUnusedImages(true, true);
        $this->assertCount(1, $toDelete);

        // Check the image is deleted
        $absPath = public_path($relPath);
        $this->assertTrue(file_exists($absPath), "Existing uploaded file at path {$absPath} exists");
        $toDelete = $imageService->deleteUnusedImages(true, false);
        $this->assertCount(1, $toDelete);
        $this->assertFalse(file_exists($absPath));

        $this->deleteImage($relPath);
    }

}