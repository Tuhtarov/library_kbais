@extends('layouts.base')

@section('header')
    @include('layouts.components.app.header_successful_auth')
    @endsection

@section('content')
    <!--Основное содержимое-->
    <h3 class="text-muted">Читатели</h3>
    @include('layouts.components.admin.form.reader.registration')

    <!--Список зарегистрированных читателей-->
    @include('layouts.components.admin.listview.readers')

@endsection
