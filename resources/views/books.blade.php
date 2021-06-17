@extends('layouts.base')


@section('content')
    <h5 class="h5 text-muted mb-5 ms-1">Все книги</h5>
    <div class="row">
        @for($i = 0; $i<10; $i++)
            <article class="card bg-transparent border-0"
                     style="max-width: 250px;">
                <main class="card-img-top text-center">
                    <a href="{{route('book')}}">
                        <img class="img-fluid" src="https://www.fillmurray.com/400/600" alt="book"
                             style="max-width: 200px; max-height: 120px">
                    </a>
                </main>
                <footer class="card-body bg-light text-center">
                    <h5 class="h5"><a class="link-dark text-decoration-none" href="">Михаил Булгаков</a></h5>
                    <h6 class="h6">Собачье сердце</h6>
                </footer>
            </article>
        @endfor
    </div>
@endsection
