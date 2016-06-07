<!DOCTYPE html>
<html>
    <head>
        <title>Rest API</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
        <link href="/css/master.css" media="screen">
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-static-top navbar-dark bg-inverse">
          <a href="/" class="navbar-brand">Rest API</a>
          <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
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
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
