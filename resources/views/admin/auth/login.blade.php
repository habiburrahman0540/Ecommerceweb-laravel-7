@extends('admin.admin_layouts')

@section('admin_content')
<div class="lock-header">
  <!-- BEGIN LOGO -->
  <a class="center" id="logo" href="index.html">
  <img class="center" alt="logo" src="{{asset('backend/')}}/img/logo.png">
  </a>
  <!-- END LOGO -->
</div>
<div class="login-wrap">
 
  <div class="metro single-size red">
      <div class="locked">
          <i class="icon-lock"></i>
          <span>Login</span>
      </div>
  </div>
  <form action="{{route('admin.login.submit')}}" class="d-block" method="post">
    @csrf
  <div class="metro double-size green">
      
          <div class="input-append lock-input">
              <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address">
              <br>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
           @enderror
            </div>
      
  </div>
  <div class="metro double-size yellow">
          <div class="input-append lock-input">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
  </div>
  <div class="metro single-size terques login">
    
    
          <button type="submit" class="btn login-btn">
              Login
              <i class=" icon-long-arrow-right"></i>
          </button>
     
       
  </div>
</form>
  <div class="metro double-size navy-blue ">
      <a href="index.html" class="social-link">
          <i class="icon-facebook-sign"></i>
          <span>Facebook Login</span>
      </a>
  </div>
  <div class="metro single-size deep-red">
      <a href="index.html" class="social-link">
          <i class="icon-google-plus-sign"></i>
          <span>Google Login</span>
      </a>
  </div>
  <div class="metro double-size blue">
      <a href="index.html" class="social-link">
          <i class="icon-twitter-sign"></i>
          <span>Twitter Login</span>
      </a>
  </div>
  <div class="metro single-size purple">
      <a href="index.html" class="social-link">
          <i class="icon-skype"></i>
          <span>Skype Login</span>
      </a>
  </div>
    
  <div class="login-footer">
      <div class="remember-hint pull-left">
          <input type="checkbox" id=""> Remember Me
      </div>
      <div class="forgot-hint pull-right">
          <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
      </div>
  </div>
</div>




@endsection
