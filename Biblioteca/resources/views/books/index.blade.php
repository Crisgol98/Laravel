@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Listado de Libros</h2>
    <table class="table mt-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Editorial</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->editorial }}</td>
                    <td>{{ $book->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection