@extends('layout')


@section('content')

      <div class="row mt-3">
        <div class="col-9">
          <h1>Usuario #{{ $id }}<h1>

          <h1>Mostrar detalles del usuario: {{$id}}</h1>

        </div>
        <div class="col-3">
           @include('sidebar')

         </div>
      </div>

@endsection<
