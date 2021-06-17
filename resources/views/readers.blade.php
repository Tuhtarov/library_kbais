@extends('layouts.base')

@section('header')
    @include('layouts.components.header_successful_auth')
    @endsection

@section('content')
    <!--Основное содержимое-->
    <h3 class="text-muted">Читатели</h3>
    @include('layouts.components.navigations.form_reg_readers')

    <!--Список зарегистрированных читателей-->
    @include('layouts.components.navigations.list_readers')

@endsection
