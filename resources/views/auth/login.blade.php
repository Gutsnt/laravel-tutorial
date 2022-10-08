@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 row justify-content-center">
            <div class="container">
              <img src="logo.jpeg" class="mx-auto d-block" width="50" height="50" />
            </div>
            <div class="border card shadow-lg p-3 mb-5 bg-body rounded "  style="max-width: 500px;">
                <div class="card-body ">
                    <div class="h5" >
                        <strong>{{ __('Iniciar sesión') }}</strong>
                        <p><small>Continuar a Worki-Fact</small></p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="form-label">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="tucorreo/nickname/telefono" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="************"  required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="">
                        @if (Route::has('password.request'))
                              <a class="btn btn-link link-dark" href="{{ route('password.request') }}">
                                {{ __('¿Olvido su Contraseña?') }}
                              </a>
                        @endif
                        </div>
                        <div class="">
                        @if (Route::has('password.request'))
                              <a class="btn btn-link link-dark" href="{{ route('register') }}">
                                {{ __('¿No tiene una cuenta? Crea una.') }}
                              </a>
                        @endif
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2 ">
                                <button type="submit" class="btn btn-primary col-11 active">
                                    <strong>{{ __('INICIAR SESION') }}</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
