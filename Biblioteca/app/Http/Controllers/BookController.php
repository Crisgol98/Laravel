<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;

class BookController extends Controller
{
    // Muestra el formulario para crear un nuevo libro
    public function create()
    {
        $autores = Autor::all(); // Obtén todos los autores para la vista del formulario
        return view('books.create', compact('autores'));
    }

    // Guarda un nuevo libro en la base de datos
    public function store(Request $request)
    {
        $libro = Libro::create($request->all());
        return redirect()->route('books.index'); // Redirige al listado de libros
    }

    // Muestra un listado de todos los libros
    public function index()
    {
        $libros = Libro::with('autor')->get(); // Incluye la relación autor
        return view('books.index', compact('libros'));
    }

    // Filtra y muestra libros de un autor específico
    public function filterByAuthor($autorId)
    {
        $libros = Libro::where('autor_id', $autorId)->with('autor')->get();
        return view('books.index', compact('libros'));
    }
}