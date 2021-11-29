<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;
use App\Models\Detail;
use App\Models\Category;

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
// Route::get('/home', [CategoryController::class, 'index']);

Route::get('/book/{slug}', [BookController::class, 'show']);
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('category', [
//         'title' => $category->category,
//         'books' => $category->books,
//         'category' => $category->category
//     ]);
// });
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/contact', [BookController::class, 'contact']);

