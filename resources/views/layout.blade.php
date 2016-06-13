<!DOCTYPE html>
<html>
    <head>
        <title>Rest API</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <link href="/css/master.css" media="screen">
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-static-top navbar-dark bg-inverse">
          <a href="/" class="navbar-brand">Rest API</a>
          <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user/create">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user/">Listar Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/documentation/">Documentación</a>
            </li>
          </ul>
        </nav>

        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <div class="scripts">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        </div>
    </body>
</html>
