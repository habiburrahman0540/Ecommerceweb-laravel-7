@extends('admin.admin_layouts')

@section('admin_content')
 <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Setting
                  </h3>
                  <ul class="breadcrumb">
                      <li>
                          <a href="#">Setting</a>
                          <span class="divider">/</span>
                      </li>
                    
                      <li class="active">
                        Change Password
                      </li>
                      
                  </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Admin Change Password </h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                
            <form class="form-horizontal" method="POST" action="{{route('admin.password.update')}}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                <div class="control-group">
                    <label for="oldpass" class="control-label">{{ __('Old Password') }}</label>
                    <div class="controls">
                        <input id="oldpass" type="password" class="span6  tooltips {{ $errors->has('oldpass') ? ' is-invalid' : '' }}" data-trigger="hover" data-original-title="Please fill out this field." name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>
                        @if ($errors->has('oldpass'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('oldpass') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="control-group">
                    <label for="password" class="control-label">{{ __('New Password') }}</label>
                    <div class="controls">
                        <input id="password" type="password" class="span6  tooltips {{ $errors->has('password') ? ' is-invalid' : '' }}" data-trigger="hover" data-original-title="Please fill out this field." name="password" required autofocus>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="control-group">
                    <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                    <div class="controls">
                        <input id="password-confirm" type="password" class="span6  tooltips" data-trigger="hover" data-original-title="Please fill out this field." name="password_confirmation" required autofocus>
                    </div>
                </div>
                <div class="form-actions">
                    <a href="{{route('admin.dashboard')}}"  type="button" class="btn btn-warning">Back</a>
                    <button type="submit" class="btn btn-primary"> {{ __('Reset Password') }}</button>
               
                </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>

@endsection
