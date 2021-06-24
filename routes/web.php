<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ReaderController;
use App\Http\Controllers\Admin\ShelfController;
use App\Http\Controllers\admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');
Route::post('/journal/add', [MainController::class, 'add'])->name('main.journal.add');


Route::get('/authorization', function () {
    return view('auth.authorization');
})->name('login');

Route::resources([
    'books' => BookController::class,
    'categories' => CategoryController::class,
    'shelves' => ShelfController::class,
    'readers' => ReaderController::class,
    'tags' => TagController::class,
]);
