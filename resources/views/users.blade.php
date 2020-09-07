<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios - nombre-proyecto</title>
  </head>
  <body>
    <h1>{{ $title }}<h1>

     @if(! empty($users))
    <ul>
      @foreach ($users as $user)
          <li>{{ $user }}</li>
      @endforeach
    </ul>
     @else
        <p>No hay usuaros registrados.</p>
      @endif
  </body>
</html>
