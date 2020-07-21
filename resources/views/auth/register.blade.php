@extends('layouts.app')

@section('content')


 <!-- Register-section -->
    <section class="loginSec Registersec" style="background-image: url('{{asset('frontend/assets/img/Register.jpg')}}');">
      <div class="container h-100">
        <div class="row justify-content-center h-100">
          <div class="col-lg-10 col-md-10 col-12 h-100 align-items-center d-flex flex-column justify-content-center">
            <div class="head p-4 text-center">
              <h2>Register With I Do Music</h2>
              <p> Get started with your free account </p>
            </div>
             @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div><br/>
              @endif
            <form class="form-signin" method="post" action="{{ route('register') }}">
              @csrf
            <div class="iDologin Register">
              <div class="iDoinput text-left">
                <label class="tit mb-3">Register As</label>
                <div class="radiobuttons">
                  <div class="rdio rdio-primary radio-inline"> <input name="role_id" value="1" id="radio1" type="radio" checked>
                    <label for="radio1">Artist</label>
                  </div>
                  <div class="rdio rdio-primary radio-inline">
                    <input name="role_id" value="2" id="radio2" type="radio">
                    <label for="radio2">Customer</label>
                  </div>
                </div>
                  <div class="form-row">
                    <div class="form-group col-md-12 mt">
                      <label class="mb-3">Your Name & Title</label>
                    </div>
                    <div class="form-group col-md-12">     
                      <select class="custom-select" name="title" required>
                       <option value="">--- Select Title ---</option>
                        @foreach ($titles as $value)
                          <option value="{{ $value }}" name="title">{{ $value }}</option>
                        @endforeach
                      </select>
                    </div>
   
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="first_name"  placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="last_name" placeholder="Last Name" required/>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-12 mt">
                      <label> Contact Details </label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="street" 
                          placeholder="Street" required/>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="city" 
                          placeholder="City" required/>
                    </div>
                    <div class="form-group col-md-6">
                      <select class="custom-select-country"  name="country_id" required>
                       <option value="">--- Select Country ---</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" name="country_id">{{ $country->name }}</option>
                            @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="postcode" 
                          placeholder="Postcode" required/>
                    </div>
                    <div class="form-group col-md-6">
                     <input type="number" class="form-control" name="phone" 
                          placeholder="Phone" required/>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="number" class="form-control" name="mobile" 
                          placeholder="Mobile"/>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-12 mt">
                      <label> User Details </label>
                    </div>
                    <div class="form-group col-md-12">
                      <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                    </div>
                    <div class="form-group col-md-6">
                     <input type="password" id="password" name="password"class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password_confirmation" required placeholder="Confirm Password">
                    </div>
                    <div class="form-group Remeberbox col-md-12">
                      <input type="checkbox" id="rem" checked="true">
                      <label for="rem">I have read and agree to the terms of engagement and the booking terms and conditions.</label>
                    </div>
                  </div>
                <button class="btn mt-4 custom-btn" type="submit">SIGN IN <span class="longarrow">⟶</span></button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>

@endsection