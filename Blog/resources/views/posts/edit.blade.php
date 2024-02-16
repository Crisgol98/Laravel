@extends("layouts.plantilla")

@section("titulo", "Editar post")

@section("contenido")
<form action="{{ route('updatePost', $post->id) }}" method="POST">
    @csrf
    @method("put")
    <div class="mb-3 ms-4">
    <label for="contenido" class="form-label">Edita el titulo</label>
    <input type="text" class="form-control w-50" id="contenido" name="titulo" rows="5" value="{{$post->titulo}}"></input>
    </div>
    <div class="mb-3 ms-4">
    <label for="contenido" class="form-label">Edita el contenido</label>
    <textarea class="form-control w-50" id="contenido" name="contenido" rows="5">{{$post->contenido}}</textarea>
    </div>
    <button class="btn btn-primary mt-3">Aplicar cambios</button>
</form>

@endsection