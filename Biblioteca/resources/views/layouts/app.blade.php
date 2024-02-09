<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... other head tags ... -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">Menú</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-link active" href="{{route('libros.index')}}">Listado Libros</a>
    <a class="nav-link active" href="{{route('autores.index')}}">Listado Autores</a>
    <a class="nav-link active" href="{{route('libros.create')}}">Nuevo Libro</a>
    <a class="nav-link active" href="{{route('libros.enviarFiltro')}}">Filtro de Libros</a>
    </div>
  </div>
</nav>
    @yield('content')

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.7.12/umd.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
