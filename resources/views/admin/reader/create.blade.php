@extends('layouts.base')

@section('header')
    @include('layouts.components.app.header_successful_auth')
@endsection

@section('content')
    <!--Основное содержимое-->
    <h4 class="text-muted mb-3">Регистрация читателя</h4>
    @include('layouts.components.admin.form.reader.registration')
@endsection
