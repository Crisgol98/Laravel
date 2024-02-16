@extends("layouts.plantilla")

@section("titulo", "Añadir Comentario")

@section("contenido")

<form action="{{ route('storeComentario', $post->id) }}" method="POST">
    @csrf
    <div class="mb-3 ms-4">
        <label for="usuario" class="form-label">Usuario</label>
        <select name="usuario" id="usuario">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 ms-4">
        <label for="contenido" class="form-label">Contenido</label>
        <textarea class="form-control w-50" id="contenido" name="contenido" rows="5"></textarea>
    </div>
    <button class="btn btn-primary mt-3">Añadir</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection