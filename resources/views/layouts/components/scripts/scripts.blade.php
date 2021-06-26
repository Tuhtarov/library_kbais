{{-- cdn bootstrap && общая настройка для страниц --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{asset('public/bootstrapframework/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('public/icons/css/all.css')}}">

<style>
    [data-tooltip] {
        position: relative; /* Относительное позиционирование */
    }

    [data-tooltip]::after {
        content: attr(data-tooltip); /* Выводим текст */
        position: absolute; /* Абсолютное позиционирование */
        max-width: 200px; /* Ширина подсказки */
        left: 0; top: 0; /* Положение подсказки */
        background: #7dd960;
        font-size: 17px;
        color: #fff; /* Цвет текста */
        padding: 0.5em; /* Поля вокруг текста */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Параметры тени */
        pointer-events: none; /* Подсказка */
        opacity: 0; /* Подсказка невидима */
        transition: 0.5s; /* Время появления подсказки */
    }
    [data-tooltip]:hover::after {
        opacity: 1; /* Показываем подсказку */
        top: 2.5em; /* Положение подсказки */
    }
</style>

<script src="{{asset('public/bootstrapframework/js/bootstrap.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


<style>
    html, body {
        height: 100%;
        background: ghostwhite;
    }
</style>
