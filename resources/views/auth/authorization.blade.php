@extends('layouts.base')
@section('header')

    <!--Шапка-->
    <header class="row p-5">
        <div class="col-md-4 mx-auto text-center my-auto bg-transparent">
            <h2 class="text-muted">Библиотека</h2>
            <hr class="bi-hr">
            <h4 class="text-muted">Авторизация</h4>
        </div>
    </header>
@endsection

@section('content')
    <!--Основное содержимое-->
        <div class="col-md-4 mx-auto">
            <form class="gap-2 mx-auto list-group form-inline" action="../books.blade.php" method="get">
                <label class="form-label  text-center" for="login">Логин</label>
                <input name="login" id="login" class="form-control mx-auto" maxlength="20" minlength="6"  type="text" required style="max-width: 250px">

                <label class="form-label text-center" for="password">Пароль</label>
                <input name="password" id="password" class="form-control mx-auto" maxlength="30" minlength="6" type="password" required style="max-width: 250px">

                <div class="form-check mx-auto mt-3">
                    <input class="form-check-input" name="remember_me" value="remember" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Запомнить меня?</label>
                </div>

                <button type="submit" class="btn btn-outline-primary mt-3 mx-auto" style="width: 150px">Войти</button>
            </form>
        </div>
@endsection

