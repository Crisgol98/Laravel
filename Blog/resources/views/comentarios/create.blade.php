@extends("layouts.plantilla")

@section("titulo", "Añadir Comentario")

@section("contenido")

<form action="{{ route('storeComentario', $post->id) }}" method="POST">
    @csrf
    <div class="mb-3 ms-4">
        <label for="usuario" class="form-label">Usuario</label>
        <select name="usuario" id="usuario" class="form-select w-50">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 ms-4">
        <label for="contenido" class="form-label">Contenido</label>
        <textarea class="form-control w-50" id="contenido" name="contenido" rows="5"></textarea>
    </div>
    <button class="btn btn-primary mt-3 ms-4">Añadir</button>
</form>

@endsection