<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Coupon;
use App\Model\Admin\Newsletter;
use Illuminate\Http\Request;

class CouponController extends Controller
{
                public function __construct(){
                    $this->middleware('auth:admin');
            }
            public function coupons(){
                
                $coupon =  Coupon::all();
                return view('admin.category.coupon',compact('coupon'));
            }
            public function Storecoupon(Request $request){
                $this->validate($request,[
                'coupon'=>'required|unique:coupons|max:80',
                'discount'=>'required|max:3',
                ]);
                $coupon = new Coupon();
                $coupon->coupon=$request->coupon;
                $coupon->discount=$request->discount;
                $coupon->save();
                $notification=array(
                'messege'=>'Coupon code saved successfully.',
                'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
            }

            public function Deletecoupon($id){
                $coupon=Coupon::find($id);
                $coupon->delete();
                $notification=array(
                'messege'=>'Coupon deleted successfully.',
                'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
            }
        public function Editcoupon($id){
            $coupon = Coupon::find($id);
            return view('admin.category.edit_coupon',compact('coupon'));
        }
            public function updatecoupon(Request $request ,$id){
                $this->validate($request,[
                    'coupon'=>'required|max:80',
                    'discount'=>'required|max:3',
                ]);

                $coupon = Coupon::find($id);
                $coupon->coupon = $request->coupon;
                $coupon->discount = $request->discount;
                $coupon->save();
                 $notification=array(
                    'messege'=>'Coupon code updated successfully.',
                    'alert-type'=>'success'
                    );
                    return Redirect()->route('admin.coupons')->with($notification);
                
            }

            public function newsletters(){
                $newsletters =  Newsletter::all();
                return view('admin.category.newsletter',compact('newsletters'));
            }
            public function Deletenewsletters($id){
                $newsletters =  Newsletter::find($id);
                $newsletters->delete();
                $notification=array(
                    'messege'=>'Subscriber deleted successfully.',
                    'alert-type'=>'success'
                        );
                    return Redirect()->back()->with($notification);
            }

}
