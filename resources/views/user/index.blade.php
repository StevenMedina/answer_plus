@extends('layout')

@section('content')
    <h1>Todos los usuarios</h1>

    @foreach ( $users as $user )
        <div class="col m6 s12">
            <div class="card green-palete">
                <div class="card-content">
                    <span class="card-title">{{ $user->name }}</span>
                    <p>{{ $user->created_at }}</p>
                    <p>{{ $user->email }}</p>
                </div>
                <div class="card-action">
                    <a href="/user/{{ $user->id }}" class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    @endforeach
@stop
