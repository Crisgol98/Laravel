@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $corto['titulo'] }}</h1>
            <h6 class="card-subtitle mb-2 text-muted">{{ $corto['director'] }}</h6>
            <p class="card-text">{{ $corto['sinapsis'] }}</p>
            <a href="{{ url('/cortos') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection