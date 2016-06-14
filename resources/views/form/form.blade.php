@extends('layout')

@section('content')
    <div class="row">
        <div class="jumbotron">
            <h2>Form</h2>

            <form class="col s12" method="post" action="{{ url('/user') }}" data-toggle="validator" role="form">
                <div class="row">
                    {{ csrf_field() }}

                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type="text" id="name" name="name" placeholder="Nombre">
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type="text" id="user" name="user" placeholder="Usuario">
                    </div>

                    <fieldset class="form-group">
                        <label for="user">Usuario</label>
                        <input class="form-control" type="text" id="user" name="user" placeholder="Usuario" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Correo Electronico" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <fieldset class="form-group">
                            <label for="password">Contraseña</label>
                            <input class="form-control" type="password" id="inputPassword" data-minlength="6" name="password" placeholder="Contraseña" required>
                            <div class="help-block">Minimo 6 caracteres</div>
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="r_password">Repetir Contraseña</label>
                            <input class="form-control" type="password" id="r_password" placeholder="Repetir Contraseña" data-match="#inputPassword" data-match-error="Whoops, these don't match" required>
                        </fieldset>
                    </fieldset>

                    <button type="submit" class="btn btn-success" type="button">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@stop
