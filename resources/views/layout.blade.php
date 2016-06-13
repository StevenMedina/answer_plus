<!DOCTYPE html>
<html>
    <head>
        <title>Rest API</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <link href="/css/master.css" media="screen">
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo">Rest API</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/user/create">Registro</a></li>
                        <li><a href="/user/">Listar Usuarios</a></li>
                        <li><a href="/documentation/">Documentación</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/user/create">Registro</a></li>
                        <li><a href="/user/">Listar Usuarios</a></li>
                        <li><a href="/documentation/">Documentación</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="container">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </main>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Rest API</h5>
                        <p class="grey-text text-lighten-4">Esto es una API REST Hecha en Laravel, Podras Registrarte, Iniciar sesion, Listar usuarios, y hacer peticiones para recibir Documentos JSON.</p>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    © 2016 Copyright Steven Medina
                </div>
            </div>
        </footer>
        <div class="scripts">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
            <script src="js/main.js"></script>
        </div>
    </body>
</html>
