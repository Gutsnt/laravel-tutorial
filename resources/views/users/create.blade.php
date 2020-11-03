
@extends('layout')

@section('title', "Crear Usuario")

@section('content')
    <h1>Crear nuevo usuario</h1>

         @if($errors->any())
       <div class="alert alert-danger">
          <h6> Por favor corriga los errores abajo</h6>
          {{-- <ul>
                @foreach ($errors->all() as $errors)
                     <li>{{ $errors }}</li>
                @endforeach
          </ul> --}}
      </div>
         @endif

        <form method="POST" action="{{ url('usuarios')}}">
            {{ csrf_field() }}

          <label for="name">Nombre:</label>
          <input type="text" name="name" id="name" placeholder="Juan perez">
         @if($errors->has('name'))
                <p>{{ $errors->first('name')}}</p>
         @endif
           <br>
          <label for="email">Correo electrónico:</label>
          <input type="email" name="email" id="email" placeholder="juan@example.com" value="{{ old('email')}}">
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
