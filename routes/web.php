<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/book', function () {
    return view('book');
})->name('book');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/authorization', function () {
    return view('authorization');
})->name('login');

Route::get('/readers', function () {
    return view('readers');
})->name('readers');

Route::get('/main', function () {
    return view('mainpage');
})->name('main');

Route::get('/shelves', function () {
    return view('shelves');
})->name('shelves');
