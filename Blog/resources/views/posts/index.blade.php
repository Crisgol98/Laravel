@extends("layouts.plantilla")

@section("titulo", "Listado")

@section("contenido")
<section class="container">
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">{{ $post->titulo }}({{ $post->usuario->name }})</h5>
                        <div class="d-flex gap-2">
                            <a href="{{ route('showPost', $post->id) }}" class="btn btn-primary">Ver</a>
                            <form action="{{ route('deletePost', $post->id) }}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger">Borrar</button>
                            </form>
                            <form action="{{ route('editPost', $post->id) }}" method="POST">
                                @csrf
                                @method("put")
                                <button class="btn btn-secondary">Editar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <h1>No hay posts</h1>
            </div>
        @endforelse
    </div>
</section>
{{$posts->links()}}
@endsection
