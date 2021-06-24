<!--Шапка с выполненной авторизацией -->
<header class="row p-5">
    @include('layouts.components.app.header_main_search')
    <!--Панель авторизации-->
        <nav class="col-md-4 float-end bg-transparent border-start">
            <label class="form-text fs-4 text-muted">Библиотекарь тётя Галя</label>
            <div class="list-inline mb-1 mt-2">
                <a class="btn btn-outline-secondary me-1 mt-1" href="{{route('login')}}">Мой профиль</a>
                <a class="btn btn-outline-secondary me-1 mt-1" href="{{route('login')}}">Выход</a>
            </div>
        </nav>
</header>
