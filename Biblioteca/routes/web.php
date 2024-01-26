<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Api\BookController as ApiBookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------     ----------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/author/{authorId}', [BookController::class, 'filterByAuthor']);
// Api
Route::get('/api/books', [ApiBookController::class, 'index']);
Route::get('/api/books/{id}', [ApiBookController::class, 'show']);
