<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titulo")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Página de Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">Listado de Posts</a>
        </ul>
        </div>
    </div>
    </nav>
    @yield("contenido")
</body>
</html>