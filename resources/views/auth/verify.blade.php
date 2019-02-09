@extends('layouts.app')

@section('content')
<div class="container" style="height: 80vh;">
    <div class="row justify-content-center align-items-center" style="height: 100%;">
        <div class="col-md-6 bg-white py-4 px-3 shadow-sm">
            <div class="p-5">
                <h2>{{ __('Verify Your Email Address') }}</h2>
                <div>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
