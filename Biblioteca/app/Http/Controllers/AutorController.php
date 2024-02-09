<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::get();
        return view('autores.index', ["autores" => $autores]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $autores = Autor::create($request->all());
        return redirect()->route('autores.index');
    }

    public function show(string $id)
    {
        return Autor::findOrFail($id);
    }

    public function edit(string $id)
    {
        $autor = Autor::findOrFail($id);
        return view('autor.edit', ["autor" => $autor]);
    }

    public function update(Request $request, string $id)
    {
        $author = Autor::findOrFail($id);
        $author->update($request->all());
        return redirect()->route('authors.index');
    }

    public function destroy(string $id)
    {
        $author = Autor::findOrFail($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
