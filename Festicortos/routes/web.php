<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CortoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cortos', [CortoController::class, 'index']);
Route::get('/cortos/{id}', [CortoController::class, 'show']);