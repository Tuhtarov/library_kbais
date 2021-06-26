@extends('layouts.base')

@section('header')
    {{-- TODO временный хардкодинг, в будущем сделать подключение нужной шапки автоматически в base шаблоне --}}
    @include('layouts.components.app.header_successful_auth')
@endsection

@section('content')
    <!--Форма информации о выбранной книге-->
    <main class="container-fluid ps-5 pe-5">
        <h3 class="text-muted mb-4">Информация о книге</h3>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-5 float-start">
                    <img class="img-fluid border border-secondary border-3" src="https://www.fillmurray.com/400/600"
                         alt="Обложка">
                </div>
                <div class="col-md-6 mt-sm-4 mt-3 mt-md-0">
                    <h2 class="card-title">{{$book->author}}</h2>
                    <h4 class="card-text">{{$book->title}}</h4>
                    <hr>
                    <div class="list-group-flush">
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Категория: {{isset($book->category) ? "{$book->category->title}" : 'отсутствует'}}</p>
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Страницы: {{$book->pages}}</p>
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Полка: {{isset($book->shelve) ? "{$book->shelve->title}" : 'отсутствует'}}</p>
                        @if($book->reader === null)
                        <p class="fs-5 list-group-item-action bg-transparent border-0 text-success">Книга доступна</p>
                        @else
                            <p class="fs-5 list-group-item-action bg-transparent border-0">Читатель книги: {{$book->reader}}</p>
                        @endif
                        <p class="list-group-item-action bg-transparent border-0"><small
                                class="text-muted">Добавлена: {{$book->created_at}}</small></p>
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Теги</p>
                        <div class="d-inline-flex fs-5 list-group-item-action bg-transparent border-0">
                            <div id="tags" class="list-inline">
                                <a class="btn btn-outline-secondary me-1" href="#"><?php echo 'тег 1' ?></a>
                                <a class="btn btn-outline-secondary me-1" href="#"><?php echo 'тег 2' ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
