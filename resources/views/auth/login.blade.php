@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/styles/contact_responsive.css">
<div class="container">
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1" style="border: 2px solid #8A8A8A; padding:30px;border-radius:25px; ">
                    <div class="contact_form_container">
                        <div class="contact_form_title"style="text-align: center;color:#0E8CE4">Sign in</div>
    
                        <form method="POST" action="{{ route('login') }}" id="contact_form">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email :</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Password :</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">{{ __('Login') }}</button>
                            </div>
                        </form> <br>
                        <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-facebook fa-lg"></i> Login with Facebook</button>
                        
                        <button type="submit" class="btn btn-danger btn-block"><i class="fab fa-google"></i> Login with Google</button>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" style="border: 2px solid #8A8A8A; padding:30px;border-radius:25px; ">
                    <div class="contact_form_container">
                        <div class="contact_form_title" style="text-align: center;color:#0E8CE4"">Sign up</div>
    
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Full Name :</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required id="name" aria-describedby="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                              <div class="form-group">
                                <label for="phone">Phone Number :</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required id="phone" aria-describedby="phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email :</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Password :</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required id="exampleInputEmail1" autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                              <div class="form-group">
                                <label for="password-confirm">Confirm Password :</label>
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password-confirm">
                              </div>
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button" >{{ __('Sign Up') }}</button>
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>
    
@endsection
