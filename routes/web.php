<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('books', \App\Http\Controllers\BookController::class);

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);

Route::get('/curl/authors', [\App\Http\Controllers\Crawler\Tadrij::class, 'downloadImageForAuthors']);
Route::get('/books/by-category/{category}', [\App\Http\Controllers\Crawler\Tadrij::class, 'byCategory']);
//Route::get('/books', [\App\Http\Controllers\Crawler\Tadrij::class, 'extractBooks']);
Route::get('/books/info', [\App\Http\Controllers\Crawler\Tadrij::class, 'extractBookInfo']);
