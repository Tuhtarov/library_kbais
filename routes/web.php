<?php

use App\Http\Controllers\BookController;
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
    return view('main.mainpage');
})->name('main');

Route::resource('book', BookController::class)->only([
    'index', 'show'
]);

Route::get('/authorization', function () {
    return view('auth.authorization');
})->name('login');

Route::get('/readers', function () {
    return view('reader.readers');
})->name('readers');

Route::get('/shelves', function () {
    return view('shelves.shelves');
})->name('shelves');
