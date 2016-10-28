<!DOCTYPE html>
<html>
    <head>
        <title>AnswerPlus</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/mixins.css" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo">AnswerPlus</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        @if (Auth::guest())
                            <li class="{{Request::segment(1) == 'login' ? 'active' : ''}}"> <a href="{{ url('/login') }}">Ingreso</a></li>
                            <li class="{{Request::segment(1) == 'register' ? 'active' : ''}}"><a href="{{ url('/register') }}">Registro</a></li>
                            <li class="{{Request::segment(1) == 'documentation' ? 'active' : ''}}"><a href="{{ url('/documentation') }}">Acerca de</a></li>
                        @else
                            <li class="{{Request::segment(1) == '/' ? 'active' : ''}}"><a href="{{ url('/') }}">Foro</a></li>
                            <li class="{{Request::segment(1) == 'user' ? 'active' : ''}}"><a href="{{ url('/user') }}">Listar Usuarios</a></li>
                            <li class="dropdown">
                                <a href="#" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                            <li>
                                <a  href="{{ url('/logout') }}"><i class="material-icons" style="font-size: 20px;">input</i></a>
                            </li>
                        @endif
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        @if (Auth::guest())
                            <li class="{{Request::segment(1) == 'login' ? 'active' : ''}}"> <a href="{{ url('/login') }}">Ingreso</a></li>
                            <li class="{{Request::segment(1) == 'register' ? 'active' : ''}}"><a href="{{ url('/register') }}">Registro</a></li>
                            <li class="{{Request::segment(1) == 'documentation' ? 'active' : ''}}"><a href="{{ url('/documentation') }}">Acerca de</a></li>
                        @else
                            <li class="dropdown">
                            <li class="{{Request::segment(1) == '/' ? 'active' : ''}}"><a href="{{ url('/') }}">Foro</a></li>
                            <li class="{{Request::segment(1) == 'user' ? 'active' : ''}}"><a href="{{ url('/user') }}">Listar Usuarios</a></li>
                                <a href="#" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"><i class="material-icons" style="font-size: 20px;">input</i></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        <main>
            <section>
                @yield('content-forum')
            </section>
        </main>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">AnswerPLus</h5>
                        <p class="grey-text text-lighten-4">Esto es un Foro, Podras Registrarte, Iniciar sesion, Listar usuarios, y hacer peticiones para recibir Documentos JSON.</p>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
            <script src="/js/main.js"></script>
            <script src="/js/carousel.js"></script>
        </div>
    </body>
</html>