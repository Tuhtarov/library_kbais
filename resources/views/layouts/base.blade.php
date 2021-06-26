<!doctype html>
<html lang="en">
<head>
    <title>Библиотека</title>
    @section('scripts')
        @include('layouts.components.scripts.scripts')
    @show
</head>

<body>

<div class="container-fluid" style="height: 85vh">
    @section('header')
        {{-- TODO условным оператором провернуть переключение между шапками не/авторизирующегося человека --}}
        @include('layouts.components.app.header_successful_auth')
    @show

    <main class="container-fluid ps-5 pe-5">
        <hr class="bi-hr mt-2 mb-4">
        @include('layouts.components.app.validation.validate_message')

        @section('content')
            {{-- Тут располагается специфичный контент для каждой вьюшки --}}
        @show
        {{-- TODO определиться с hr тегом <hr class="bi-hr mt-2 mb-2">--}}
    </main>

    <footer class="footer container-fluid ps-5 pe-5">
        <div class="row mx-auto col-md-12">
            @section('footer')

            @show
        </div>
    </footer>
</div>

</body>
</html>
