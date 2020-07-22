@extends('layouts.app')

@section('content')

<section class="loginSec Forgot" style="background-image: url('{{asset('frontend/assets/img/login-banner.jpg')}}');">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-lg-7 col-md-9 col-12 h-100 align-items-center d-flex flex-column justify-content-center">
                <div class="head p-4 text-center">
                    <h2>Reset Password</h2>
                </div>
                <div class="iDologin forgot">
                    <div class="iDoinput text-center">
                      
                         <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group mb-0">
                                    <input id="email" type="email" class="form-control mt-0 mb-3 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <input id="password" type="password" class="form-control mt-0 mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <input id="password-confirm" type="password" class="form-control mt-0 mb-3" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>

                                <button type="submit" class="btn custom-btn">
                                        {{ __('RESET PASSWORD') }}
                                <span class="longarrow">⟶</span>
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
