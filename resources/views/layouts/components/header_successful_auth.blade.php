<!--Шапка с выполненной авторизацией -->
<header class="row p-5">
    @include('layouts.components.navigations.header_main_search')
    <!--Панель авторизации-->
    <nav class="col-md-4 mt-2 float-end bg-transparent border-start">
        <label class="form-text fs-4 text-muted">Аккаунт</label>
        <div class="list-group-flush list-inline">
{{--            TODO тут навигацию допилить --}}
            <a class="btn btn-outline-secondary me-1 mt-1" href="{{route('login')}}">Мой профиль</a>
            <a class="btn btn-outline-secondary me-1 mt-1" href="{{route('login')}}">Выход</a>
        </div>
    </nav>
</header>