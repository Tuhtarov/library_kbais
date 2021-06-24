@extends('layouts.base')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="container-fluid col-md-4 col-sm-12 mb-sm-4">
                @include('layouts.components.admin.sidebar.books')
                @include('layouts.components.admin.sidebar.categories')
                @include('layouts.components.admin.sidebar.tags')
                @include('layouts.components.admin.sidebar.shelves')
                @include('layouts.components.admin.sidebar.readers')
            </div>
            <div class="container-fluid col-md-8 col-sm-12">
                @include('layouts.components.admin.form.journal.add_record')
                @include('layouts.components.admin.listview.reading')
            </div>
        </div>
    </div>
@endsection
