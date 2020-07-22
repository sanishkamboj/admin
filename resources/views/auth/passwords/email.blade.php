@extends('layouts.app')

@section('content')

 <section class="loginSec Forgot" style="background-image: url('{{asset('frontend/assets/img/login-banner.jpg')}}');">
      <div class="container h-100">
        <div class="row justify-content-center h-100">
          <div class="col-lg-7 col-md-9 col-12 h-100 align-items-center d-flex flex-column justify-content-center">
            <div class="head p-4 text-center">
              <h2>Password Restore</h2>
              <p> Please specify your email address and click Submit. We will send you a message with new password. </p>
            </div>
            <div class="iDologin forgot">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <div class="iDoinput text-center">
              
                 <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                  <div class="form-group mb-0">
                    <input id="email" type="email" class="form-control mt-0 mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn custom-btn">
                        {{ __('SUBMIT') }}
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
