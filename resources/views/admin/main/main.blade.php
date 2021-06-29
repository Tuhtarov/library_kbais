@extends('layouts.base')

@section('scripts')
    @include('layouts.components.scripts.select2')
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            {{--Подключение элементов сайдбара--}}
            <div class="container-fluid col-md-4 col-sm-12 mb-sm-4">
                @include('layouts.components.admin.sidebar.books')
                @include('layouts.components.admin.sidebar.categories')
                @include('layouts.components.admin.sidebar.tags')
                @include('layouts.components.admin.sidebar.shelves')
                @include('layouts.components.admin.sidebar.readers')
            </div>
            {{--Подключение журнала--}}
            <div class="container-fluid col-md-8 col-sm-12">
                @include('layouts.components.admin.form.journal.add_record')
            </div>
            <div class="container-fluid col-md-12 mb-3">
                @include('layouts.components.admin.listview.reading')
            </div>
        </div>
    </div>
@endsection

@section('footer')
    {{$journal->links()}}
@endsection
