
@extends('layout')

@section('title', "Crear Usuario")

@section('content')
    <h1>Crear Usuario</h1>

        <form method="POST" action="{{ url('usuarios')}}">
            {{ csrf_field() }}

          <button type="submit">Crear Usuario</button>

        </form>

    <p>
            <a href="{{ route('users')}}"> Regresar al listado de usuario </a>
    </p>
@endsection
