@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: white; height: 100vh;">
    <div class="row h-100">
        <div class="col h-100">
            <div class="card text-center h-100 border-0">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h1 class="card-title" style="font-weight: bold;">JAMURKU</h1> <br>
                    <img src="https://i.pinimg.com/564x/bb/ad/82/bbad8209ebac287440691eb866037399.jpg" alt="Mushrooms Icons" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col h-100">
            <div class="card text-center h-100 border-0">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <div class="card" style="background-color: #F6F5F3; border: none; width: 70%; height: 60%;">
                        <div class="card-header" style="font-weight: bold; border: none; font-size: 30px; background: none;">
                            {{ __('Login') }}
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>

                                    <div class="col-md-10 offset-md-1">
                                        <input id="email" placeholder="user@example.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-5 col-form-label ">{{ __('Kata Sandi') }}</label>

                                    <div class="col-md-10 offset-md-1">
                                        <input id="password" placeholder="********" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-auto offset-md-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center">
                                    <div class="col-md-3 offset-md-auto">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection