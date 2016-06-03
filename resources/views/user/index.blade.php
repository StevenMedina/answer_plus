@extends('layout')

@section('content')
    <h1>Todos los usuarios</h1>

    @foreach ( $users as $user )
        <div>
            {{ $user->name }}
        </div>
    @endforeach
@stop
