@extends('layouts.app')

@section('content')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 offset-sm-1" style="border: 1px solid #8A8A8A; padding:30px; ">
                <div class="contact_form_container">
                    <div class="contact_form_title"style="text-align: center;color:#0E8CE4">Change Password</div>

                    <form method="POST" action="{{ route('user.password.update') }}" id="contact_form">
                        @csrf
                   
                          <div class="form-group">
                            <label for="oldpass">{{ __('Old Password :') }}</label>
                          <input type="password" id="oldpass" name="oldpass" class="form-control {{$errors->has('oldpass') ? 'is-invalid':''}}" required>
                            @if($errors->has('oldpass'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('oldpass') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('New Password :') }}</label>
                            <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid':''}}" id="password" required>
                            @if($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">{{ __('Confirm Password :') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                        </div>
                        <div class="contact_form_button">
                           
                            <a href="{{route('home')}}" type="button" class="btn btn-warning" style="color: white">Back
                            </a>
                        <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button> 
                        </div>
                        
                    </form> 
                </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="{{asset('frontend/')}}/images/user.png" alt="" style="width:90px;height:90px;margin-left:34%;" >
                <div class="card-body">
                    <h5 class="card-title text-center">{{Auth::user()->name}}</h5>
                    
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center"><a href="" >Change Password</a></li>
                    <li class="list-group-item text-center">Dapibus ac facilisis in</li>
                    <li class="list-group-item text-center">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body">
                    <a href="{{route('logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                    
                  </div>
              </div>
            </div>
          </div>
    </div>
</>

@endsection
