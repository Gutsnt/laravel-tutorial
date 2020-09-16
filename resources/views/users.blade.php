@extends('layout')


@section('content')

      <div class="row mt-3">
        <div class="col-9">
          <h1>{{ $title }}<h1>

          <ul>
            @forelse ($users as $user)
                <li>{{ $user }}</li>
            @empty
                <li>No hay usuaros registrados.</li>
              @endforelse
          </ul>

        </div>
        <div class="col-3">
           @include('sidebar')

         </div>
      </div>

@endsection
