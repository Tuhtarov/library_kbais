@extends('layouts.base')

@section('content')
    <!--Форма добавления книги-->
    <main class="container-fluid pe-5">
        <div class="row">
            <div class="col-md-4 float-start">
                <img class="img-fluid border border-secondary border-3" src="http://via.placeholder.com/400x600"
                     alt="Обложка">
            </div>
            <form class="mx-auto container col-md-5 mt-sm-4 mt-3 mt-md-0" method="post"
                  action="{{route('books.update',['book' => $book->id])}}">
                @csrf
                @method('PUT')
                <h3 class="text-muted mb-4">Редактирование книги</h3>
                <div class="mb-3">
                    <label for="name" class="form-label">Наименование произведения</label>
                    <input required type="text" placeholder="пример: Собачье сердце" class="form-control" id="name"
                           name="book[title]" value="{{$book->title}}" maxlength="30">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Автор книги</label>
                    <input required type="text" placeholder="пример: Михаил Булгаков, А.С Пушкин, Байер Майк"
                           class="form-control" value="{{$book->author}}" id="author" name="book[author]"  maxlength="30">
                </div>
                <div class="mb-3" style="max-width: 200px">
                    <label for="pages" class="form-label">Количество страниц</label>
                    <input required type="number" placeholder="30-2500" class="form-control" min="30" max="2500"
                           id="pages" value="{{$book->pages}}" name="book[pages]">
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">Категория</label>
                        <select class="form-select" aria-label="Default select example" oninput="this" name="book[category_id]">
                            <option value="{{$book->category->id}}" selected>{{$book->category->title}}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                        <a class="ms-2 mt-2 text-decoration-none" href="#"><small>Создать категорию</small></a>

                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="tags" class="form-label">Теги</label>
                        <input disabled placeholder="в разработке" type="text" class="form-control" id="tags"
                               name="book[tags]">
                        <a class="ms-2 mt-2 text-decoration-none" href="#"><small>Создать тэг</small></a>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Фотография обложки книги (необязательно)</label>
                    <input class="form-control" type="file" id="photo" name="book[photo]">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Сохранить</button>
            </form>
            <div class="col-md-3">

            </div>
        </div>
    </main>
@endsection
