
@extends('layout')

@section('title', "Crear Usuario")

@section('content')
    <h1>Crear nuevo usuario</h1>

        <form method="POST" action="{{ url('usuarios')}}">
            {{ csrf_field() }}

          <label for="name">Nombre:</label>
          <input type="text" name="name" id="name" placeholder="Juan perez">

           <br>
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="juan@example.com">
           <br>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" placeholder="mayor a 6 caracteres">
           <br>
          <button type="submit">Crear Usuario</button>

        </form>

    <p>
            <a href="{{ route('users.index')}}"> Regresar al listado de usuario </a>
    </p>
@endsection
