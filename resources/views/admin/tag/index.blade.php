@extends('layouts.base')


@section('content')
    <h3 class="h3 text-muted mb-3">Все теги</h3>
    <div class="container-fluid">
        <div class="row float-start col-md-8">
            {{--кнопка создать--}}
            <a class="btn btn-primary mb-3" href="{{route('tags.create')}}"
               style="width: 250px">Создать тег</a>
            {{--список категорий--}}
            @include('layouts.components.admin.listview.tags')
        </div>
    </div>
@endsection

@section('footer')
    {{ $tags->links()  }}
@endsection
