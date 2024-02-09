@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Nuevo Libro</h2>
    <form action="{{route('libros.store')}}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
        </div>

        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" name="editorial" id="editorial">
        </div>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" step="0.01" name="precio" id="precio">
        </div>

        <div class="form-group">
            <label for="autor_id">Autor:</label>
            <select name="autor_id" id="autor_id" class="form-control">
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection