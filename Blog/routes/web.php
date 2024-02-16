<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;

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

// Posts
Route::get("posts/create", [PostController::class, "create"])->name("createPost");
Route::get("posts", [PostController::class, "index"])->name("indexPost");
Route::get("posts/{post}", [PostController::class, "show"])->where("post", "[\d]+")->name("showPost");
Route::delete("posts/{id}/delete", [PostController::class, "destroy"])->name("deletePost");
Route::put("posts/{id}/edit", [PostController::class, "edit"])->name("editPost");
Route::post("posts/{id}/update", [PostController::class, "update"])->name("updatePost");
// Comentarios
Route::delete("posts/{postId}/comentarios/{comentarioId}/delete", [ComentarioController::class, "destroy"])->name("deleteComentario");
Route::post("posts/{postId}/comentarios/{comentarioId}/edit", [ComentarioController::class, "edit"])->name("editComentario");
Route::put("posts/{postId}/comentarios/{comentarioId}/update", [ComentarioController::class, "update"])->name("updateComentario");
Route::post("posts/{postId}/comentarios/create", [ComentarioController::class, "create"])->name("createComentario");
Route::post("posts/{postId}/comentarios/store", [ComentarioController::class, "store"])->name("storeComentario");
