@extends('layout')

@section('content')
    <div class="row">
        <h2>Form</h2>

        <form>
            <fieldset class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="name" placeholder="Nombre">
            </fieldset>

            <fieldset class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" type="text" name="name" placeholder="Usuario">
            </fieldset>


        </form>
    </div>


@stop
