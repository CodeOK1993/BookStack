@extends('base')

@section('content')

    <div class="row faded-small">
        <div class="col-md-6 faded">
            <div class="breadcrumbs padded-horizontal">
                <a href="{{$book->getUrl()}}"><i class="zmdi zmdi-book"></i>{{ $book->name }}</a>
            </div>
        </div>
        <div class="col-md-6 faded">
            <div class="action-buttons">
                @if($currentUser->can('chapter-create'))
                    <a href="{{$chapter->getUrl() . '/create-page'}}" class="text-pos"><i class="zmdi zmdi-plus"></i>New Page</a>
                @endif
                @if($currentUser->can('chapter-update'))
                    <a href="{{$chapter->getUrl() . '/edit'}}" class="text-primary"><i class="zmdi zmdi-edit"></i>Edit</a>
                @endif
                @if($currentUser->can('chapter-delete'))
                    <a href="{{$chapter->getUrl() . '/delete'}}" class="text-neg"><i class="zmdi zmdi-delete"></i>Delete</a>
                @endif
            </div>
        </div>
    </div>


    <div class="page-content">
        <h1>{{ $chapter->name }}</h1>
        <p class="text-muted">{{ $chapter->description }}</p>

        @if(count($chapter->pages) > 0)
            <div class="page-list">
                <hr>
                @foreach($chapter->pages as $page)
                    <div >
                        <h3>
                            <a href="{{ $page->getUrl() }}">
                                <i class="zmdi zmdi-file-text"></i>{{ $page->name }}
                            </a>
                        </h3>
                        <p class="text-muted">
                            {{$page->getExcerpt(180)}}
                        </p>
                    </div>
                    <hr>
                @endforeach
            </div>
        @else
            <p class="text-muted">No pages are in this chapter</p>
        @endif

        <p class="text-muted small">
            Created {{$chapter->created_at->diffForHumans()}} @if($chapter->createdBy) by {{$chapter->createdBy->name}} @endif
            <br>
            Last Updated {{$chapter->updated_at->diffForHumans()}} @if($chapter->createdBy) by {{$chapter->updatedBy->name}} @endif
        </p>
    </div>


@stop
