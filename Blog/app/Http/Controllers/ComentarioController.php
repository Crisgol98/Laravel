<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Post;
use App\Models\Usuario;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $postId)
    {   
        $post = Post::findOrFail($postId);
        $usuarios = Usuario::all();
        return view("comentarios.create", ["post" => $post], ["usuarios" => $usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $postId)
    {
        $comentario = new Comentario();
        $comentario->contenido = $request->contenido;
        $comentario->post_id = $postId;
        $comentario->usuario_id = $request->usuario;
        $comentario->save();
        $post = Post::findOrFail($postId);
        $comentarios = $post->comentario()->get();
        return redirect()->route("showPost", ["post" => $post, "comentarios" => $comentarios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $postId, string $comentarioId)
    {
        $comentario = Comentario::findOrFail($comentarioId);
        $post = Post::findOrFail($postId);
        return view("comentarios.edit", ["comentario" => $comentario], ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $postId, string $comentarioId)
    {
        $comentario = Comentario::findOrFail($comentarioId);
        $comentario->update($request->all());
        $post = Post::findOrFail($postId);
        $comentarios = $post->comentario()->get();
        return redirect()->route('showPost', ["post" => $post, "comentarios" => $comentarios]);
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(string $postId, string $comentarioId)
    {
        Comentario::findOrFail($comentarioId)->delete();
        $post = Post::findOrFail($postId);
        $comentarios = $post->comentario()->get();
        return redirect()->route('showPost', ["post" => $post, "comentarios" => $comentarios]);
    }
}
