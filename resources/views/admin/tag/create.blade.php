@extends('layouts.base')

@section('content')
    <form class="float-start container col-md-5 mt-sm-4 mt-3 mb-3 mt-md-0" method="post"
          action="{{route('tags.store')}}">
        @csrf
        <h3 class="text-muted mb-4">Новый тег</h3>
        {{--Произведение--}}
        <div class="mb-3">
            <label for="name" class="form-label">Имя тега</label>
            <input required type="text" placeholder="Пример: питание, полезное" class="form-control" id="name"
                   name="tag[title]" maxlength="30">
        </div>
    <button class="btn btn-primary mt-2" type="submit">Создать</button>
    </form>
@endsection
