@extends('tri-layout')

@section('container-classes', 'mt-xl')

@section('left')
    @if($recents)
        <div id="recents" class="mb-xl">
            <h5>{{ trans('entities.recently_viewed') }}</h5>
            @include('partials.entity-list', ['entities' => $recents, 'style' => 'compact'])
        </div>
    @endif

    <div id="popular" class="mb-xl">
        <h5>{{ trans('entities.books_popular') }}</h5>
        @if(count($popular) > 0)
            @include('partials.entity-list', ['entities' => $popular, 'style' => 'compact'])
        @else
            <div class="body text-muted">{{ trans('entities.books_popular_empty') }}</div>
        @endif
    </div>

    <div id="new" class="mb-xl">
        <h5>{{ trans('entities.books_new') }}</h5>
        @if(count($popular) > 0)
            @include('partials.entity-list', ['entities' => $new, 'style' => 'compact'])
        @else
            <div class="body text-muted">{{ trans('entities.books_new_empty') }}</div>
        @endif
    </div>
@stop

@section('body')
    @include('books.list', ['books' => $books, 'view' => $view])
@stop

@section('right')

    <div class="actions mb-xl">
        <h5>Actions</h5>
        <div class="icon-list text-primary">
            @if($currentUser->can('book-create-all'))
                <a href="{{ baseUrl("/create-book") }}" class="icon-list-item">
                    <span class="icon">@icon('add')</span>
                    <span>{{ trans('entities.books_create') }}</span>
                </a>
            @endif
            @include('books.view-toggle', ['view' => $view])
        </div>
    </div>

@stop