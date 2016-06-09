@extends('layout')

@section('content')
    <div class="row">
        <h2>Form</h2>

        <form method="POST" action="{{ url('/user') }">
            {{ csrf_field() }}

            <fieldset class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Nombre">
            </fieldset>

            <fieldset class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" type="text" id="user" name="user" placeholder="Usuario">
            </fieldset>

            <fieldset class="form-group">
                <label for="email">Correo Electronico</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Correo Electronico">
            </fieldset>

            <fieldset class="form-group">
                <label for="password">Contraseña</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Contraseña">
            </fieldset>

            <fieldset class="form-group">
                <label for="r_password">Repetir Contraseña</label>
                <input class="form-control" type="password" id="r_password" placeholder="Repetir Contraseña">
            </fieldset>

            <button type="submit" class="btn btn-success" type="button">Enviar</button>
        </form>
    </div>
@stop
