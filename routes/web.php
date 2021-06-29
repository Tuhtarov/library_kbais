<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ReaderController;
use App\Http\Controllers\Admin\ShelfController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::prefix('search')->name('search.')->group(function () {
    Route::get('/books/tag/{slug}', [SearchController::class, 'searchBooksByTag'])->name('books.tag.slug')
        ->where('slug','^[a-zA-Z0-9-]{3,16}$');
    Route::get('/books/category/{slug}', [SearchController::class, 'searchBooksByCategory'])->name('books.category.slug')
        ->where('slug','^[a-zA-Z0-9-]{3,16}$');
    Route::get('/books/shelf/{slug}', [SearchController::class, 'searchBooksByShelf'])->name('books.shelf.slug')
        ->where('slug','^[a-zA-Z0-9-]{3,16}$');
});

Route::name('journal.')->prefix('journal')->group(function () {
    Route::post('/add', [JournalController::class, 'add'])
        ->name('add');
    Route::post('/confirm/return/{record}', [JournalController::class, 'confirmReturnBook'])
        ->name('confirm.return')->whereNumber('record');
});


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
