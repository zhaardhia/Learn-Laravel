<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('layouts/main', [
        "title" => "Home",
    ]);
});

Route::get('/home', [BookController::class, 'index']);

Route::get('/book/{slug}', [BookController::class, 'show']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "name" => "Firzha",
        "email" => "wkwk@gmail.com"
    ]);
});

