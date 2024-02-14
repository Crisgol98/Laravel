@extends("layouts.plantilla")

@section("titulo", "Listado")

@section("contenido")
<section class="container">
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->titulo }}(
                            @if ($post->usuario->id == $post->usuario_id)
                                {{ $post->usuario->name }}
                            @endif
                        )</h5>
                        <a href="{{ route('show', $post->id) }}" class="btn btn-primary">Ver</a>
                        <form action="{{ route('delete', $post->id) }}" method="POST">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Borrar</button>
                        </form>
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
