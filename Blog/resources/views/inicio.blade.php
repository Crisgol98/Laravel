@extends("layouts.plantilla")

@section("titulo", "Inicio")

@section("contenido")

    <div class="container ms-2">
        <h1>Página de Inicio</h1>

        <form action="{{ route('createPost') }}" method="POST">
            @csrf
            <button>Añadir Post</button>
        </form>
    </div>

@endsection