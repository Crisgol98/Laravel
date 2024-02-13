<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\Api\LibroController as apiLibroController;
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

Route::get('/', function () {
    return redirect('/libros');
});
Route::resource('libros', LibroController::class);
Route::resource('autores', AutorController::class);
Route::get('libros.filtrado', [LibroController::class, 'enviarFiltro'])->name('libros.enviarFiltro');
Route::post('filtrar', [LibroController::class, 'filtrar'])->name('libros.filtrar');
Route::get('/libros/autor/{autorId}', [LibroController::class, 'filterByAuthor']);
