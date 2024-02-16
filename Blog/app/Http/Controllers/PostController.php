<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Usuario;
use App\Models\Comentario;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with("usuario")->paginate(6);
        return view("posts.index", ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuario::all();
        return view("posts.create", ["usuarios" => $usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::Create($request->all());
        $posts = Post::with("usuario");
        return redirect()->route('indexPost', ["posts" => $posts]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with("usuario")->findOrFail($id);
        $comentarios = $post->comentario()->get();
        return view("posts.show", ["post" => $post], ["comentarios" => $comentarios]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view("posts.edit", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('indexPost');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route("indexPost");
    }
}
