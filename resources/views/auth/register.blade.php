@extends('layouts.app')

@section('content')
<div class="container" style="height: 80vh;">
    <div class="row justify-content-center align-items-center" style="height: 100%;">
        @include('auth.social')
        <div class="col-12 col-sm-5 bg-white py-1 px-2 shadow-sm">
            <div class="p-5">
                <h2>{{ __('Register') }}</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="firstname" class="text-md-right">{{ __('Firstname') }}</label>
                        <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('firstname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
                        <label for="password-confirm" class="text-md-right">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="admin" {{ old('admin') ? 'checked' : '' }}>
                            <label class="form-check-label" for="admin">
                                {{ __('Make user admin') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
