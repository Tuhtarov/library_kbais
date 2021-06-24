@extends('layouts.base')

@section('content')
    <form class="float-start container col-md-5 mt-sm-4 mt-3 mb-3 mt-md-0" method="POST"
          action="{{route('shelves.update', ['shelf' => $shelve->id])}}">
        @csrf
        @method('put')
        <h3 class="text-muted mb-4">Редактирование полки</h3>
        {{--Произведение--}}
        <div class="mb-3">
            <label for="title" class="form-label">Новое наименование полки</label>
            <input type="text" placeholder="текущее значение: {{$shelve->title}}" class="form-control" id="title"
                   name="shelf[title]" maxlength="30" minlength="5">

            <label for="slug" class="form-label mt-2">Новое наименование slug</label>
            <input type="text" placeholder="текущее значение: {{$shelve->slug}}" class="form-control" id="slug"
                   name="shelf[slug]" maxlength="30"  minlength="5">
        </div>
        <button class="btn btn-primary mt-2" type="submit">Применить</button>
    </form>
@endsection
