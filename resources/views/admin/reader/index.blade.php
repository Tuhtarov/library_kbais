@extends('layouts.base')


@section('content')
<!--Список зарегистрированных читателей-->
@include('layouts.components.admin.listview.readers')
@endsection
