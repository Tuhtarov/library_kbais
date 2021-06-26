<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ReaderController;
use App\Http\Controllers\Admin\ShelfController;
use App\Http\Controllers\admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::name('journal.')->prefix('journal')->group(function () {
    Route::post('/add', [JournalController::class, 'add'])->name('add');
    Route::get('/{record}/edit', [JournalController::class, 'edit'])->name('edit')->whereNumber('record');
    Route::post('/update/{record}', [JournalController::class, 'update'])->name('update')->whereNumber('record');
    Route::post('/destroy/{record}', [JournalController::class, 'destroy'])->name('destroy')->whereNumber('record');
    Route::post('/confirm/return/{record}', [JournalController::class, 'confirmReturnBook'])->name('confirm.return')->whereNumber('record');
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
