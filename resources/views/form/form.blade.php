@extends('layout')

@section('content')
    <div class="row">
        <div class="container">
            <h2>Form</h2>
            <form class="col s12" id="formValidate" method="post" action="{{ url('/user') }}">
                {{ csrf_field() }}

                <div class="input-field">
                    <i class="material-icons prefix">label</i>
                    <label for="name">Nombre</label>
                    <input class="validate" type="text" id="name" name="name">
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <label for="user">Usuario</label>
                    <input class="validate" type="text" id="user" name="user">
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">chat_bubble_outline</i>
                    <label for="email">Correo Electronico</label>
                    <input class="validate" type="email" id="email" name="email">
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <label for="phone">Telefono celular</label>
                    <input class="validate" type="text" id="phone" name="phone">
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">lock_outline</i>
                    <label for="password">Contraseña</label>
                    <input class="validate" type="password" id="password" name="password">
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">lock_outline</i>
                    <label for="r_password">Repetir contraseña</label>
                    <input class="validate" type="password" id="r_password" name="r_password">
                </div>
                <div class="input-field horizontal">
                    <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@stop
