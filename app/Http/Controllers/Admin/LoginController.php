<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);
    }
   public function showLoginForm(){
       return view('admin.auth.login');
   }
   public function login(Request $request){
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required',
       ]);
       if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));
   }
   public function logout(){
    Auth::guard('admin')->logout();
    $notification=array(
     'messege'=>'Successfully Logout',
     'alert-type'=>'success'
      );
  return Redirect()->route('admin.login')->with($notification);
}
}
