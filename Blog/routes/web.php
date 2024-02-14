<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('inicio');
})->name("inicio");

Route::resource("posts", PostController::class)->only([
    "index", "show", "create", "edit"
]);

Route::get("posts/{post}", [PostController::class, "show"])->where("post", "[\d]+")->name("show");
Route::delete("delete/{id}", [PostController::class, "destroy"])->name("delete");