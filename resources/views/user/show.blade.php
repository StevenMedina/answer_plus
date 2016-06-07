@extends('layout')


@section('content')
    <h1>{{ $user->name }}</h1>
    <h2>{{ $user->email }}</h2>
    <h4>{{ $user->created_at }}</h4>
@stop
