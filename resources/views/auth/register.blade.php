@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card border-0">
                <div class=" card-header" style="font-weight: bold; border: none; font-size: 30px; background: none; text-align: center;">{{ __('Register') }}</div>

                <div class="card-body text-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-auto offset-md-2 col-form-label">{{ __('Nama') }}</label>

                            <div class="col-md-8 offset-md-2">
                                <input id="name" placeholder="User" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-auto offset-md-2 col-form-label">{{ __('Email') }}</label>

                            <div class="col-md-8 offset-md-2">
                                <input id="email" placeholder="user@example.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-auto offset-md-2 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-8 offset-md-2">
                                <input id="password" placeholder="********" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-auto offset-md-2 col-form-label ">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8 offset-md-2">
                                <input id="password-confirm" placeholder="********" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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