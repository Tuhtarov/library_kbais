@extends('layouts.base')

@section('content')
    <h3 class="h3 text-muted mb-3">Все полки</h3>
    <div class="container-fluid">
        <div class="row float-start col-md-8">
            {{--кнопка создать--}}
            <a class="btn btn-primary mb-3" href="{{route('shelves.create')}}"
               style="width: 250px">Добавить полку</a>
            {{--список категорий--}}
            @include('layouts.components.admin.listview.shelves')
        </div>
    </div>
@endsection

@section('footer')
    {{ $shelves->links()  }}
@endsection
