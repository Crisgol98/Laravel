@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Nuevo Libro</h2>
    <form action="{{ url('/books') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" name="editorial" id="editorial">
        </div>

        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" step="0.01" name="price" id="price">
        </div>

        <div class="form-group">
            <label for="author_id">Autor:</label>
            <select name="author_id" id="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection