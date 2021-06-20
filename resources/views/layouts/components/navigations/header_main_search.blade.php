{{-- Шапка | Панель навигации и поисковая строка --}}
<?php use Illuminate\Support\Facades\Route; ?>

<!--Лого-->
<div class="col-md-4 float-start my-auto bg-transparent border-start">
    <h2 class="text-muted">Библиотека</h2>
    <div class="list-inline mb-1">
        {{-- TODO тут навигацию допилить и погуглить на счёт рациональности сего кода--}}
        <a class="btn btn-outline-secondary
        <?php if (Route::getCurrentRoute()->uri == '/') echo 'active';?>
            me-1 mt-1" href="{{route('main')}}">Главная</a>

        <a class="btn btn-outline-secondary
        <?php if (Route::getCurrentRoute()->uri == 'book') echo 'active'; ?>
            me-1 mt-1" href="{{route('book.index')}}">Каталог</a>

        <a class="btn btn-outline-secondary
        <?php if (Route::getCurrentRoute()->uri == 'shelves') echo 'active'; ?>
            me-1 mt-1 " href="{{route('shelves')}}">Полки</a>
    </div>
</div>

<!--Поисковая строка-->
<nav class="col-md-4 mx-auto my-auto border-start">
    <div class="mx-auto my-auto bg-transparent">
        <label class="form-text fs-4" for="searchBook">Поиск по каталогу</label>
        <form class="d-flex mt-2" action="#" method="get">
            <input id="searchBook" name="search_book" class="form-control me-2 p-2"
                   type="search" placeholder="Книга или автор" aria-label="Search"
                   style="max-width: 410px;">
            <button class="btn btn-outline-success" type="submit">Найти</button>
        </form>
    </div>
</nav>
