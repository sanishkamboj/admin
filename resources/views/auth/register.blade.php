@extends('layouts.app')

@section('content')

 <!-- BANNER SECTION CODE START -->
    <div class="banner-sec-inner-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                 @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div><br/>
                @endif
                <h5 class="card-title text-center">Register</h5>
                <form class="form-signin" method="post" action="{{ route('register') }}">
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="role_id" id="customerRadio" value="2" checked>
                          <label  for="customerRadio">
                            Customer
                          </label>
                    </div>
                    
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="role_id" id="artistRadio" value="1">
                          <label for="artistRadio">
                            Artist
                          </label>
                      </div>

                    <div class="form-label-group">
                        @csrf
                        
                        <select name="title" class="form-control" style="width:250px" required>
                            <option value="">--- Select Title ---</option>
                            @foreach ($titles as $value)
                            <option value="{{ $value }}" name="title">{{ $value }}</option>
                            @endforeach
                        </select>
                        <label for="title">Title</label>
                    </div>

                    <div class="form-label-group">                        
                          <input type="text" class="form-control" name="first_name" placeholder="First Name" required/>
                          <label for="first_name">First Name</label>
                    </div>

                    <div class="form-label-group">                        
                          <input type="text" class="form-control" name="last_name" placeholder="Last Name" required/>
                          <label for="last_name">Last Name</label>
                    </div>

                    <div class="form-label-group">                        
                          <input type="text" class="form-control" name="street" 
                          placeholder="Street" required/>
                          <label for="street">Street</label>
                    </div>

                    <div class="form-label-group">
                        <select name="country_id" class="form-control" style="width:250px">
                            <option value="">--- Select Country ---</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" name="country_id">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        <label for="country_id">Country</label>
                    </div>
                    

                    <div class="form-label-group">                        
                          <input type="text" class="form-control" name="city" 
                          placeholder="City" required/>
                          <label for="city">City</label>
                    </div>

                    <div class="form-label-group">                        
                          <input type="text" class="form-control" name="postcode" 
                          placeholder="Postcode" required/>
                          <label for="name">Postcode</label>
                    </div>

                    <div class="form-label-group">                        
                          <input type="number" class="form-control" name="phone" 
                          placeholder="Phone" required/>
                          <label for="phone">Phone</label>
                    </div>

                    <div class="form-label-group">                        
                          <input type="number" class="form-control" name="mobile" 
                          placeholder="Mobile" required/>
                          <label for="mobile">Mobile</label>
                    </div>

                    <div class="form-label-group">
                        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                        <label for="email">Email address</label>
                    </div>

                  <div class="form-label-group">
                        <input type="password" id="password" name="password"class="form-control" placeholder="Password" required>
                        <label for="password">Password</label>
                  </div> 

                  <div class="form-label-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password_confirmation" required placeholder="Confirm Password">
                        <label for="password_confirmation">Confirm Password</label>

                    </div>  

                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- BANNER SECTION CODE END -->

@endsection