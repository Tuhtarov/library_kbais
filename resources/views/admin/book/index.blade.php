@extends('layouts.base')


@section('content')

    <h5 class="h5 text-muted mb-5 ms-1">Все книги</h5>
    @include('layouts.components.admin.listview.books')

@endsection

@section('footer')
    {{ $books->links()  }}
@endsection
