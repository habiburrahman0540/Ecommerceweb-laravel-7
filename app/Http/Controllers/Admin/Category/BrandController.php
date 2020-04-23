<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
   }

   public function brand(){
      
    $brand =  Brand::all();
       return view('admin.category.brand',compact('brand'));
   }

            public function storebrand(Request $request){
            $this->validate($request,[
                'brand_name'=>'required|unique:brands|max:255',
            ]);
                $brand = new Brand();
                $brand->brand_name = $request->brand_name;
                $image = $request->file('brand_logo');
                if($image){
                    $image_name = date('dmy_H_s_i');
                    $ext = strtolower($image->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path ='image/brand/';
                    $image_url = $upload_path.$image_full_name;
                    $success = $image->move($upload_path,$image_full_name);
                    $brand->brand_logo = $image_url ;
                    $brand->save();
                    $notification=array(
                        'messege'=>'Brand data inserted successfully.',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
                }
            }
            public function Deletebrand($id){
                $brand = Brand::where('id',$id)->first();
                $image =$brand->brand_logo;
                unlink($image);
                $brand->delete();
                $notification=array(
                    'messege'=>'Brand data deleted successfully.',
                    'alert-type'=>'success'
                     );
                   return Redirect()->route('admin.brands')->with($notification);

            }
            public function Editbrand($id){
                $brand = Brand::where('id',$id)->first();
                return view('admin.category.edit_brand',compact('brand'));
            }
            public function Updatebrand(Request $request,$id){
                $this->validate($request,[
                    'brand_name'=>'required|max:255',
                ]);
                    $brand = Brand::where('id',$id)->first();
                    $brand->brand_name = $request->brand_name;
                    $oldlogo = $request->old_logo;
                    $image = $request->file('brand_logo');
                    if($image){
                        unlink($oldlogo);
                        $image_name = date('dmy_H_s_i');
                        $ext = strtolower($image->getClientOriginalExtension());
                        $image_full_name = $image_name.'.'.$ext;
                        $upload_path ='image/brand/';
                        $image_url = $upload_path.$image_full_name;
                        $success = $image->move($upload_path,$image_full_name);
                        $brand->brand_logo = $image_url ;
                        $brand->save();
                        $notification=array(
                            'messege'=>'Brand data updated successfully.',
                            'alert-type'=>'success'
                             );
                           return Redirect()->route('admin.brands')->with($notification);
                    }else{
                        $brand->save();
                        $notification=array(
                            'messege'=>'Brand data updated successfully without brand logo.',
                            'alert-type'=>'success'
                             );
                           return Redirect()->route('admin.brands')->with($notification);
                    }
            }


}
