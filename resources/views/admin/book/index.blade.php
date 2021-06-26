@extends('layouts.base')


@section('content')
    <h5 class="h5 text-muted mb-5 ms-1">Все книги</h5>
    <div class="row">
        {{--Ссылка на создание новой книги--}}
        <article class="card bg-transparent border-0"
                 style="max-width: 250px;">
            <main class="card-img-top text-center">
                <a href="{{route('books.create')}}">
                    <img class="img-fluid" src="http://via.placeholder.com/400x600" alt="create book"
                         style="max-width: 200px; max-height: 120px">
                </a>
            </main>
            <footer class="card-body bg-light text-center">
                <h5 class="h5"><a class="link-dark text-decoration-none" href="{{route('books.create')}}">
                        Добавить книгу</a></h5>
            </footer>
        </article>

        @foreach($books as $book)
            <article class="card bg-transparent border-0"
                     style="max-width: 250px;">

                <main class="card-img-top text-center position-relative">
                    <div class="img-fluid">
                        <a href="{{route('books.show', ['book' => $book->id])}}">
                            <img src="https://www.fillmurray.com/400/600" alt="book"
                                 style="max-width: 200px; max-height: 120px">
                        </a>
                        @if($book->reader)
                            <span class="position-absolute top-0 start-70 translate-middle
                            badge rounded-pill bg-info fa fa-book-reader">.</span>
                        @else
                            <span class="position-absolute top-0 start-70 translate-middle
                            badge rounded-pill bg-success fa fa-check-circle">.</span>
                        @endif
                    </div>

                </main>
                <footer class="card-body bg-light text-center">
                    <h5 class="h5">{{$book->title}}</h5>
                    <h6 class="h6"><a class="link-dark text-decoration-none"
                                      href="{{route('books.show', ['book' => $book->id])}}">{{$book->author}}</a></h6>
                    <div class="d-inline">
                        <form action="{{route('books.destroy', ['book' => $book->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-link link-secondary text-decoration-none" href="{{route('books.edit', ['book' => $book->id])}}">Изменить</a>
                            <button type="submit" class="btn btn-link text-decoration-none link-danger">Удалить</button>
                        </form>
                    </div>
                </footer>
            </article>
        @endforeach
    </div>
@endsection

@section('footer')
    {{ $books->links()  }}
@endsection
