@extends('layouts.base')


@section('content')
    <h3 class="h3 text-muted mb-3">Все категории</h3>
    <div class="container-fluid">
        <div class="row float-start col-md-8">
            {{--кнопка создать--}}
            <a class="btn btn-primary mb-3" href="{{route('categories.create')}}"
               style="width: 250px">Создать категорию</a>
            {{--список категорий--}}
            @include('layouts.components.admin.listview.categories')
        </div>
    </div>
@endsection

@section('footer')
    {{ $categories->links()  }}
@endsection
