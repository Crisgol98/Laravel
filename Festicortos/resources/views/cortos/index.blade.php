@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($cortos as $corto)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $corto['titulo'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $corto['director'] }}</h6>
                        <p class="card-text">{{ $corto['sinapsis'] }}</p>
                        <a href="{{ url('/cortos/' . $corto['id']) }}" class="btn btn-primary">Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection