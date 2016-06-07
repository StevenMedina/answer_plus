@extends('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-3">Bienvenido!</h1>
        <p class="lead">Esto es una API REST Hecha en Laravel, Podras Registrarte, Iniciar sesion, Listar usuarios, y hacer peticiones para recibir Documentos JSON.</p>
        <hr class="m-y-2">
        <p>Aqui podras encontrar la documentacion del API.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/documentation" role="button">Leer más</a>
        </p>
    </div>
@stop
