@extends('layouts.app')

@section('content')
<div class="container" style="height: 75vh;">
    <div class="row justify-content-center align-items-center" style="height: 100%;">
        @include('auth.social')
        <div class="col-12 col-sm-5 bg-white py-4 px-3 shadow-sm">
            <div class="p-5">
                <h2>{{ __('Login') }}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            {{ __('LOGIN') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </h2>
        </div>
    </div>
</div>
@endsection
