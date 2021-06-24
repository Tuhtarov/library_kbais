@extends('layouts.base')

@section('content')
    <form class="float-start container col-md-5 mt-sm-4 mt-3 mb-3 mt-md-0" method="post"
          action="{{route('categories.store')}}">
        @csrf
        <h3 class="text-muted mb-4">Новая категория</h3>
        {{--Произведение--}}
        <div class="mb-3">
            <label for="name" class="form-label">Наименование категории</label>
            <input required type="text" placeholder="Пример: роман, детектив" class="form-control" id="name"
                   name="title" maxlength="30">
        </div>
    <button class="btn btn-primary mt-2" type="submit">Создать</button>
    </form>
@endsection
