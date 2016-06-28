@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="card green-palete">
            <div class="card-content">
                <h1>Bienvenido!</h1>
                <p>Esto es una API REST Hecha en Laravel, Podras Registrarte, Iniciar sesion, Listar usuarios, y hacer peticiones para recibir Documentos JSON.</p>
            </div>
        </div>
        <div class="card-action">
            <p class="lead">
            <p>Aqui podras encontrar la documentacion del API.</p>
                <a class="btn btn-primary btn-lg" href="/documentation" role="button">Leer más</a>
            </p>
        </div>
    </div>
</div>
@endsection
