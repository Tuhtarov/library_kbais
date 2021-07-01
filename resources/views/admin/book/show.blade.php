@extends('layouts.base')

@section('content')
    <!--Форма информации о выбранной книге-->
    <main class="container-fluid ps-5 pe-5">
        <h3 class="text-muted mb-4">Информация о книге</h3>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-5 float-start">
                    <img class="img-fluid border border-secondary border-3" style="max-width: 400px; max-height: 600px"
                         src="{{$book->image != null ? asset('public/storage/' . $book->image) : 'https://www.fillmurray.com/400/600'}}"
                         alt="Обложка">
                </div>
                <div class="col-md-6 mt-sm-4 mt-3 mt-md-0">
                    <h2 class="card-title">{{$book->author}}</h2>
                    <h4 class="card-text">{{$book->title}}</h4>
                    <hr>
                    <div class="list-group-flush">
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Категория:
                            @if(isset($book->category))
                                <a class="text-decoration-none link-info"
                                   href="{{route('search.books.category.slug', ['slug' => $book->category->slug])}}">
                                    {{$book->category->title}}
                                </a>
                            @else
                                {{'отсутствует'}}
                            @endif
                        </p>
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Страницы: {{$book->pages}}</p>
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Полка:
                            @if(isset($book->shelve))
                                <a class="text-decoration-none link-info"
                                   href="{{route('search.books.shelf.slug', ['slug' => $book->shelve->slug])}}">
                                    {{$book->shelve->title}}
                                </a>
                                @else
                                {{'отсутствует'}}
                            @endif
                        </p>
                        @if($book->reader_id == null)
                        <p class="fs-5 list-group-item-action bg-transparent border-0 text-success">Книга доступна</p>
                        @else
                            <p class="fs-5 list-group-item-action bg-transparent border-0">Читатель книги:
                                <a class="text-decoration-none link-info"
                                   href="{{route('readers.show', ['reader' => $book->reader->id])}}">
                                    {{$book->reader->getFullName()}}
                                </a>
                            </p>
                        @endif
                        <p class="list-group-item-action bg-transparent border-0"><small
                                class="text-muted">Добавлена: {{$book->created_at}}</small></p>
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Теги @if(!$book->tags->count()) отсутствуют @endif</p>
                        <div class="d-inline-flex fs-5 list-group-item-action bg-transparent border-0">
                            <div id="tags" class="list-inline">
                                @foreach($book->tags as $tag)
                                <a class="btn btn-outline-secondary me-1"
                                   href="{{route('search.books.tag.slug', ['slug' => $tag->slug])}}">{{$tag->title}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
