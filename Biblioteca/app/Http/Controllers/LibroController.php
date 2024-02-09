<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;

class LibroController extends Controller
{
    public function create() {
        $autores = Autor::get();
        return view('libros.create', ["autores" => $autores]);
    }

    public function store(Request $request) {
        Libro::create($request->all());
        return redirect()->route('libros.index');
    }

    public function index() {
        $libros = Libro::with('autor')->paginate(3);
        return view('libros.index', ["libros" => $libros, "autores" => $libros]);
    }

    public function enviarFiltro() {
        $autores = Autor::get();
        return view('libros.filtrado', ["autores" => $autores]);
    }

    public function filtrar(Request $request) {
        $libros = Libro::where('autor_id', $request->autor)->with('autor')->paginate(3);
        return view('libros.index', ["libros" => $libros], ["autores" => $libros]);
    }

    public function show(string $id) {
        return Libro::findOrFail($id);
    }
}