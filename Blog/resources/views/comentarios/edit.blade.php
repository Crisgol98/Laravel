@extends("layouts.plantilla")

@section("titulo", "Editar Comentario")

@section("contenido")

<form action="{{ route('updateComentario', ['postId' => $post->id, 'comentarioId' => $comentario->id]) }}" method="POST">
    @csrf
    @method("put")
    <div class="mb-3 ms-4">
    <label for="contenido" class="form-label">Edita el contenido</label>
    <textarea class="form-control w-50" id="contenido" name="contenido" rows="5">{{$comentario->contenido}}</textarea>
    </div>
    <button class="btn btn-primary mt-3">Aplicar cambios</button>
</form>

@endsection