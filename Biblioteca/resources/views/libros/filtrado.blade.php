@extends('layouts.app')

@section('content')
<h1>Busqueda de libros por autor</h1>
<form action="{{route('libros.filtrar')}}" method="POST" class="form-control">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="autor">Autor</label>
        <select name="autor" id="autor" class="form-control">
            @foreach($autores as $autor) 
                <option value="{{$autor->id}}">{{$autor->nombre}}</option>
            @endforeach            
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection