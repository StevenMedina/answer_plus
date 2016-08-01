@extends('layouts.app')

@section('content')
	<div class="card-panel hoverable red lighten-2 white-text">
	    <h1>{{ $user->name }}</h1>
	    <h2>{{ $user->email }}</h2>
	    <h4>{{ $user->created_at }}</h4>
    </div>
@stop