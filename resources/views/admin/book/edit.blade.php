@extends('layouts.base')

@section('scripts')
    @include('layouts.components.scripts.select2')
@endsection

@section('content')
    <!--Форма добавления книги-->
    <main class="container-fluid pe-5">
        <div class="row">
            <div class="col-md-4 float-start">
                <img class="img-fluid border border-secondary border-3"
                     src="{{$book->image != null ? asset('public/storage/' . $book->image) : 'https://www.fillmurray.com/400/600'}}"
                     alt="Обложка">
            </div>
            <form class="mx-auto container col-md-5 mt-sm-4 mt-3 mt-md-0" method="post" enctype="multipart/form-data"
                  action="{{route('books.update',['book' => $book->id])}}">
                @csrf
                @method('PUT')
                <h3 class="text-muted mb-4">Редактирование книги</h3>
                {{--Произведение--}}
                <div class="mb-3">
                    <label for="name" class="form-label">Наименование произведения</label>
                    <input required type="text" placeholder="пример: Собачье сердце" class="form-control" id="name"
                           name="book[title]" value="{{$book->title}}" maxlength="30">
                </div>
                {{--Автор--}}
                <div class="mb-3">
                    <label for="author" class="form-label">Автор книги</label>
                    <input required type="text" placeholder="пример: Михаил Булгаков, А.С Пушкин, Байер Майк"
                           class="form-control" value="{{$book->author}}" id="author" name="book[author]"
                           maxlength="30">
                </div>
                {{--Строка с: кол-вом страниц, полкой, категорией--}}
                <div class="row">
                    {{--Количество страницы--}}
                    <div class="mb-3 col-md-6">
                        <label for="pages" class="form-label">Количество страниц</label>
                        <input required type="number" placeholder="30-2500" class="form-control" min="30" max="2500"
                               id="pages" value="{{$book->pages}}" name="book[pages]">
                    </div>
                    {{--Полка--}}
                    <div class="mb-3 col-md-6">
                        <label for="shelves" class="form-label">
                            <a class="text-decoration-none link-success" href="{{route('shelves.create')}}"
                               data-tooltip="Добавить полку">Полка</a>
                        </label>
                        <select required oninput="this" name="book[shelve_id]" id="shelves" class="form-select"
                                aria-label="Shelves">
                            <option value="{{isset($book->shelve) ? $book->shelve->id : 0}}" selected>
                                Текущая полка: {{isset($book->shelve) ? $book->shelve->title : 'отсутствует'}}
                            </option>
                            @foreach($shelves as $shelve)
                                <option value="{{$shelve->id}}">{{$shelve->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--Категория--}}
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">
                            <a class="text-decoration-none link-success" href="{{route('categories.create')}}"
                               data-tooltip="Создать категорию">
                                Категория
                            </a>
                        </label>
                        <select required oninput="this" name="book[category_id]" class="form-select"
                                aria-label="Categories">
                            <option value="{{isset($book->category) ? $book->category->id : 0}}" selected>
                                Текущая категория: {{isset($book->category) ? $book->category->title : 'отсутствует'}}
                            </option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{--Теги--}}
                <div class="mb-3 row">
                    <div class="form-group">
                        <label for="tags" class="form-label">Теги</label>
                        <select id="tags" name="tags[]" class="select2" multiple="multiple"
                                data-placeholder="Выбрать теги" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"
                                        @if(in_array($tag->id, $book->tags->pluck('id')->all())) selected @endif>
                                    {{$tag->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Фотография обложки книги (необязательно)</label>
                    <input class="form-control" type="file" id="photo" name="book[image]">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Сохранить</button>
            </form>
            <div class="col-md-3">

            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('layouts.components.admin.form.book.simple_create_tag')
@endsection
