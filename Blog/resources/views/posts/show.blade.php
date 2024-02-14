@extends("layouts.plantilla")

@section("titulo", "Ficha post")

@section("contenido")
    <section id="post">
        <h1>{{ $post->titulo }}</h1>
        <p>{{ $post->contenido }}</p>
        <p>Creado: {{ $post->created_at }}</p>
    </section>
@endsection