@extends('layouts.base')

@section('content')
    <form class="float-start container col-md-5 mt-sm-4 mt-3 mb-3 mt-md-0" method="POST"
          action="{{route('tags.update', ['tag' => $tag->id])}}">
        @csrf
        @method('put')
        <h3 class="text-muted mb-4">Редактирование тега</h3>
        <div class="mb-3">
            <label for="title" class="form-label">Новое имя</label>
            <input value="{{$tag->title}}" type="text" placeholder="текущее значение: {{$tag->title}}"
                   class="form-control" id="title" name="category[title]" maxlength="30" minlength="5">

            <label for="slug" class="form-label mt-2">Новый slug для тега</label>
            <input value="{{$tag->slug}}" type="text" placeholder="текущее значение: {{$tag->slug}}"
                   class="form-control" id="slug" name="category[slug]" maxlength="30"  minlength="5">
        </div>
        <button class="btn btn-primary mt-2" type="submit">Применить</button>
    </form>
@endsection
