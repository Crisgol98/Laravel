@extends('layouts.app')

@section('content')
    <h1 style="text-align: center" class="mt-3">Autores</h1>

    <div class="container mt-4 mb-4">
                <table class="table table-hover shadow-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($autores as $autor)
                            <tr>
                                <td>{{ $autor->id }}</td>
                                <td>{{ $autor->nombre }}</td>
                                <td>{{ $autor->nacimiento }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
