@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 style="text-align: center">Lista de Libros</h2>
    <table class="table mt-4 table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Título</th>
                @if ($autores->count() > 1)
                    <th>Autor</th>
                @endif
                <th>Editorial</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo}}</td>
                    @foreach($autores as $autor)
                        @if($libro->autor_id == $autor->id)
                            <td>{{ $autor->nombre }}</td>
                            @break
                        @endif
                    @endforeach
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->precio }}€</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$libros->links()}}
</div>
@endsection