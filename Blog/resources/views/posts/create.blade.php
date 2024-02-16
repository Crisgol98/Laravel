@extends("layouts.plantilla")

@section("titulo", "Crear Post")

@section("contenido")

<form action="{{ route('storePost') }}" method="POST">
    @csrf
    <div class="mb-3 ms-4">
        <label for="usuario_id" class="form-label">Usuario</label>
        <select name="usuario_id" id="usuario_id" class="form-select">
            @foreach($usuarios as $usuario)
                <option name="usuario_id" id="usuario_id" value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 ms-4">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control w-50" id="titulo" name="titulo" rows="5"></input>
    </div>
    <div class="mb-3 ms-4">
        <label for="contenido" class="form-label">Contenido</label>
        <textarea class="form-control w-50" id="contenido" name="contenido" rows="5"></textarea>
    </div>
    <button class="btn btn-primary mt-3">Añadir post</button>
</form>

@endsection