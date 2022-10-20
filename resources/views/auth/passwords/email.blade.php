@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 row justify-content-center">
            <div class="container col-12" style="max-width: 440px;padding:0px">
            <img src="logo.jpeg" class="mx-auto d-block" width="50" height="50" />
            </div>
            <div class="card  mb-3 bg-body mt-100"  style="max-width: 440px; border-radius: 0px; border: white;">
                <div class="card-body pl-4 pr-4 col-form-label row justify-content-center">
                    <div class=""  style="max-width: 400px; padding-left: 39px; padding-right: 37px;">
                        <div class="h5">
                            <p><strong> Recuperacion de la Contraseña</strong></p>
                        </div>
                        <div class="h6 mt-3">
                            <p><strong> Necesitamos comprobar tu identidad</strong></p>
                        </div>
                        <div class="h6 mt-3">
                        <p>Para recuperar tu contraseña, te enviaremos un enlace a tu direccion de correo:</p>
                        </div>
                        <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="col-md-12 mb-2">
                                    <div class="form-group label-floating">
                                        <label for="email" class="control-label width-100">direccion de correo electronico</label>
                                        <input id="email" type="email" class="w-100%  form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  autofocus >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class=" text-center mt-1" >
                                        <button type="submit"  class="btn btn-primary col-4 col-5 active mt-3" style="border-radius: 0px; border-color:#005fab; background-color: #005fab;">
                                            <strong>{{ __('RECUPERAR') }}</strong>
                                        </button>
                                        <a class='btn btn-secundary' style="background-color: #cfcfcf; color:white; height: 36.39px; border-radius: 0px; width: 108.75px" href="{{ url('login')   }}"><strong>{{ __('CANCELAR') }}</strong></a>
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $.material.init();
        </script>
@endsection

