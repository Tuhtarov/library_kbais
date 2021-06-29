@extends('layouts.base')

@if(isset($books) && count($books))

@section('content')
    @if(count($books) == 1)
        <h5 class="h5 text-muted mb-5 ms-1">
            По {{$typeSearch}} <strong class="text-info">'{{$search}}'</strong> найдена одна книга:
        </h5>
    @else
        <h5 class="h5 text-muted mb-5 ms-1">
            По {{$typeSearch}} <strong class="text-info">'{{$search}}'</strong> найдено {{count($books)}} книг(и):
        </h5>
    @endif
    @include('layouts.components.admin.listview.books')
@endsection

@section('footer')
    {{ $books->links()  }}
@endsection

@else
@section('content')
    <h5 class="h5 text-muted mb-5 ms-1"><strong class="text-info">Ничего не найдено :(</strong></h5>
@endsection
@endif


