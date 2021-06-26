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
                  action="{{route('books.store')}}">
                @csrf
                <h3 class="text-muted mb-4">Новая книга</h3>
                {{--Произведение--}}
                <div class="mb-3">
                    <label for="name" class="form-label">Наименование произведения</label>
                    <input required type="text" placeholder="пример: Собачье сердце" class="form-control" id="name"
                           name="book[title]" maxlength="50">
                </div>
                {{--Автор--}}
                <div class="mb-3">
                    <label for="author" class="form-label">Автор книги</label>
                    <input required type="text" placeholder="пример: Михаил Булгаков, А.С Пушкин, Байер Майк"
                           class="form-control" id="author" name="book[author]"  maxlength="35">
                </div>
                {{--Количество страницы--}}
                <div class="row">
                    <div class="mb-3" style="max-width: 200px">
                        <label for="pages" class="form-label">Количество страниц</label>
                        <input required type="number" placeholder="30-2500" class="form-control" min="30" max="2500"
                               id="pages" name="book[pages]">
                    </div>
                    {{--Полка--}}
                    <div class="mb-3" style="max-width: 200px">
                        <label for="shelves" class="form-label">Полка</label>
                        <select required oninput="this" name="book[shelve_id]" id="shelves" class="form-select" aria-label="Shelves">
                            @foreach($shelves as $shelve)
                                <option value="{{$shelve->id}}">{{$shelve->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{--Категория--}}
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">Категория</label>
                        <select required oninput="this" name="book[category_id]" class="form-select" aria-label="Categories">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                        <a class="ms-2 mt-2 text-decoration-none" href="{{route('categories.create')}}">
                            <small>Создать категорию</small>
                        </a>
                    </div>

                {{--Тег--}}
                    <div class="mb-3 col-md-6">
                        <label for="tags" class="form-label">Теги</label>
                        <select required oninput="this" name="book[tag_id]" id="tags" class="form-select" aria-label="Tags">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>
                        <a class="ms-2 mt-2 text-decoration-none" href="{{route('tags.create')}}">
                            <small>Создать тэг</small>
                        </a>
                    </div>
                </div>
                {{--Фото--}}
                <div class="mb-3">
                    <label for="formFile" class="form-label">Фотография обложки книги (не обязательно)</label>
                    <input class="form-control" type="file" id="photo" name="book[photo]">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Добавить</button>
            </form>
            <div class="col-md-3">

            </div>
        </div>
    </main>
@endsection
