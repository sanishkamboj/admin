@extends('layouts.app')

@section('content')
    <!-- login-section -->
    <section class="loginSec" style="background-image: url('{{asset('frontend/assets/img/login-banner.jpg')}}');">
      <div class="container h-100">
        <div class="row justify-content-center h-100">
          <div class="col-lg-6 col-md-8 col-12 h-100 align-items-center d-flex flex-column justify-content-center">
            <div class="head p-4 text-center">
              <h2>Welcome to IDO</h2>
              <p> Please sign in using your existing account. </p>
            </div>
            <div class="iDologin">
              <div class="iDoinput text-center">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <input id="email" type="email" class="form-control mt-0 mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                 
                </div>
                <button type="submit" class="btn mt-5 custom-btn">
                    {{ __('SIGN IN') }}<span class="longarrow">⟶</span>
                </button>
              </form>
               <p> 
                @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                @endif
              </div>
            </div>
            <div class="iDobottom">
              <p> Need an Account? </p>
              <span><a href="{{route('register')}}">Register new account </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
