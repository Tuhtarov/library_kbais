<!--Шапка без выполненной аутентификации-->
<header class="row p-5">
    @include('layouts.components.navigations.header_main_search')
    <!--Панель авторизации-->
    <nav class="col-md-4 float-end bg-transparent border-start">
        <label class="form-text fs-4 text-muted">Аккаунт</label>
        <div class="list-inline mb-1 mt-2">
            <a class="btn btn-outline-primary me-1 mt-1"  href="{{route('login')}}">Авторизация</a>
        </div>
    </nav>
</header>

