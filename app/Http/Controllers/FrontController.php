<?php

namespace App\Http\Controllers;

use App\Model\Admin\Newsletter;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function StoreNewsletter(Request $request){
        $this->validate($request,[
            'email'=>'required|unique:newsletters|max:50',
            ]);
            $newsletters = new Newsletter();
            $newsletters->email=$request->email;
            $newsletters->save();
            
            $notification=array(
            'messege'=>'Thanks ,you subscribed successfully.',
            'alert-type'=>'success'
                );
              
         
            return Redirect()->back()->with($notification);
    }
}
