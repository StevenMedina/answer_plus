@extends('layouts.app')

@section('content')
    <h1>Todos los usuarios</h1>

    @if ( $users['message'] )
        <div class="col m12 s12">
            <div class="card green-palete">
                <div class="center card-content">
                    <span class="card-title">{{ $users['message'] }}</span>
                </div>
                <div class="center card-action">
                    <a href="{{ url('/') }}" class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">replay</i></a>
                </div>
            </div>
        </div>
    @else 
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
    @endif
@stop
