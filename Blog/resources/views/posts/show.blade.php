@extends("layouts.plantilla")

@section("titulo", "Ficha post")

@section("contenido")
    <section id="post" class="container  text-center d-grid justify-content-center align-items-center mb-5">
    <div class="container d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center gap-2">
                <h1>Post de {{$post->usuario->name}}</h1>
                <a href="{{ route('indexPost') }}" class="btn btn-info">Volver</a>
            </div>
        </div>
        <div class="card h-100">
            <div class="card-body d-flex justify-content-center align-items-center p-2 flex-column">
                <h1>{{ $post->titulo }}</h1>
                <p>{{ $post->contenido }}</p>
                <p>Creado: {{ $post->created_at }}</p>
            </div>
        </div>
    </section>
    <h1 class="text-center">Comentarios</h1>
    <section class="container d-grid gap-4">
        @forelse ($comentarios as $comentario)
        <div class="card p-2 d-flex jutify-content-center align-items-center">
            <h3>{{$comentario->usuario->name}}</h3>
            <p>{{$comentario->contenido}}</p>
            <h5>{{$comentario->created_at}}</h5>
            <div class="d-flex gap-2">
                <form action="{{ route('editComentario', ['postId' => $post->id, 'comentarioId' => $comentario->id]) }}" method="POST">
                    @csrf
                    <button class="btn btn-secondary">Editar</button>
                </form>
                <form action="{{ route('deleteComentario', ['postId' => $post->id, 'comentarioId' => $comentario->id]) }}" method="POST">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger">Borrar</button>
                </form>
            </div>
        </div>
        @empty
        <div class="card d-flex justify-content-center align-items-center">
            <h1>No hay comentarios</h1>
        </div>
        @endforelse
        <div class="container w-100 d-flex justify-content-center align-items-center">
            <form action="{{ route('createComentario', $post->id) }}" method="POST">
                @csrf
                <button class="btn btn-dark">Añadir Comentario</button>
            </form>
        </div>
    </section>
@endsection