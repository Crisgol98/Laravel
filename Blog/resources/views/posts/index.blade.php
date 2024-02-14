@extends("layouts.plantilla")

@section("titulo", "Listado")

@section("contenido")
<section class="container">
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->titulo }}</h5>
                        <a href="{{ route('show', $post->id) }}" class="btn btn-primary">Ver</a>
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
<!-- {{$posts->links()}} -->
@endsection
