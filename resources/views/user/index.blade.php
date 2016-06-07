@extends('layout')

@section('content')
    <h1>Todos los usuarios</h1>

    @foreach ( $users as $user )
        <div>
            <a href="/user/{{ $user->id }}">{{ $user->name }}</a>
        </div>
    @endforeach
@stop
