<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Brand;
use App\Model\Admin\Category;
use App\Model\Admin\Subcategory;
use App\Post;
use App\Post_category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use PhpParser\Builder\Function_;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
   }
public function index(){
    $product = Product::join('categories','products.category_id','categories.id')
                ->join('brands','products.brand_id','brands.id')
                ->select('products.*','categories.category_name','brands.brand_name')
                ->get();
    return view('admin.product.index',compact('product'));
}
public function ProductSettings(){
    $product = Product::join('categories','products.category_id','categories.id')
                ->join('brands','products.brand_id','brands.id')
                ->select('products.*','categories.category_name','brands.brand_name')
                ->get();
    return view('admin.product.productseettings',compact('product'));
}

public function inactive($id){
$product= Product::where('id',$id)->update(['status'=>0]);
$notification=array(
    'messege'=>'product status inactive successfully.',
    'alert-type'=>'success'
        );
    return Redirect()->back()->with($notification);
}
public function active($id){
    $product= Product::where('id',$id)->update(['status'=>1]);
$notification=array(
    'messege'=>'product status active successfully.',
    'alert-type'=>'success'
        );
    return Redirect()->back()->with($notification);
}


public function inactivehotdeal($id){
    $product= Product::where('id',$id)->update(['hot_deal'=>0]);
    $notification=array(
        'messege'=>'product Featured inactive successfully.',
        'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }
    public function activehotdeal($id){
        $product= Product::where('id',$id)->update(['hot_deal'=>1]);
    $notification=array(
        'messege'=>'product Featured active successfully.',
        'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }
    public function inactivetrend($id){
        $product= Product::where('id',$id)->update(['trend'=>0]);
        $notification=array(
            'messege'=>'product Trend inactive successfully.',
            'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }
        public function activetrend($id){
            $product= Product::where('id',$id)->update(['trend'=>1]);
        $notification=array(
            'messege'=>'product Trend active successfully.',
            'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }
        public function inactivebestrated($id){
            $product= Product::where('id',$id)->update(['best_rated'=>0]);
            $notification=array(
                'messege'=>'product best rated inactive successfully.',
                'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
            }
            public function activebestrated($id){
                $product= Product::where('id',$id)->update(['best_rated'=>1]);
            $notification=array(
                'messege'=>'product best rated active successfully.',
                'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
            }

public function create(){
    $category = Category::all();
    $brand = Brand::all();
    return view('admin.product.create',compact('category','brand'));
}
        public function subcategory($category_id){
            $subcategory = Subcategory::where('category_id',$category_id)->get();
            return json_encode($subcategory);
        }
        public function store(Request $request){
            $product = new Product();
            $product->product_name= $request->product_name;
            $product->product_code= $request->product_code;
            $product->product_quantity= $request->product_quantity;
            $product->category_id= $request->category_id;
            $product->subcategory_id= $request->subcategory_id;
            $product->brand_id= $request->brand_id;
            $product->product_details= $request->product_details;
            $product->product_color= $request->product_color;
            $product->product_size= $request->product_size;
            $product->selling_price= $request->selling_price;
            $product->discount_price= $request->discount_price;
            $product->video_link= $request->video_link;
            $product->main_slider= $request->main_slider;
            $product->hot_deal= $request->hot_deal;
            $product->best_rated= $request->best_rated;
            $product->mid_slider= $request->mid_slider;
            $product->hot_new= $request->hot_new;
            $product->trend= $request->trend;
            $product->status= 1;
            $image_one = $request->image_one;
            $image_two = $request->image_two;
            $image_three = $request->image_three;
            if($request->hasFile('image_one')){
                $image_one =$request->file('image_one');
                $image_one_file_name = time().'.'.$image_one->getClientOriginalExtension();
                $location_image_one = public_path('media/product/'.$image_one_file_name);
                Image::make($image_one)->resize(300,300)->save($location_image_one);
                $product->image_one = $image_one_file_name;
            }
            if($request->hasFile('image_two')){
                $image_two =$request->file('image_two');
                $image_two_file_name = time().'.'.$image_two->getClientOriginalExtension();
                $location_image_two = public_path('media/product/'.$image_two_file_name );
                Image::make($image_two)->resize(300,300)->save($location_image_two);
                $product->image_two =  $image_two_file_name;
            }
            if($request->hasFile('image_three')){
                $image_three =$request->file('image_three');
                $image_three_file_name = time().'.'.$image_three->getClientOriginalExtension();
                $location_image_three = public_path('media/product/'.$image_three_file_name);
                Image::make($image_three)->resize(300,300)->save($location_image_three);
                $product->image_three = $image_three_file_name;
            }
            $product->save();
            $notification=array(
                'messege'=>'product inserted successfully.',
                'alert-type'=>'success'
                    );
                return Redirect()->route('all.product')->with($notification);
            
            
        }
        public function DeleteProduct($id){
$product = Product::find($id);
$image_one = $product->image_one;
$image_two = $product->image_two;
$image_three = $product->image_three;
Storage::delete($image_one);
Storage::delete($image_two);
Storage::delete($image_three);
$product->delete();
$notification=array(
    'messege'=>'product deleted successfully.',
    'alert-type'=>'success'
        );
    return Redirect()->back()->with($notification);
        }

        public function ViewProduct($id){
            $product = Product::join('categories','products.category_id','categories.id')
                ->join('subcategories','products.subcategory_id','subcategories.id')
                ->join('brands','products.brand_id','brands.id')
                ->select('products.*','categories.category_name','subcategories.subcategory_name','brands.brand_name')
                ->where('products.id',$id)
                ->first();
    return view('admin.product.showproduct',compact('product'));
        }
        public function EditProduct($id){
            $category = Category::all();
            $brand = Brand::all();
            $subcategory=Subcategory::all();
                $product = Product::find($id);
                return view('admin.product.edit',compact('product','category','brand','subcategory'));
        }
        public function UpdateProduct(Request $request,$id){
            $product = Product::find($id);
            $product->product_name= $request->product_name;
            $product->product_code= $request->product_code;
            $product->product_quantity= $request->product_quantity;
            $product->category_id= $request->category_id;
            $product->subcategory_id= $request->subcategory_id;
            $product->brand_id= $request->brand_id;
            $product->product_details= $request->product_details;
            $product->product_color= $request->product_color;
            $product->product_size= $request->product_size;
            $product->selling_price= $request->selling_price;
            $product->discount_price= $request->discount_price;
            $product->video_link= $request->video_link;
            $product->main_slider= $request->main_slider;
            $product->hot_deal= $request->hot_deal;
            $product->best_rated= $request->best_rated;
            $product->mid_slider= $request->mid_slider;
            $product->hot_new= $request->hot_new;
            $product->trend= $request->trend;
            $product->status= 1;
            $image_one = $request->image_one;
            $image_two = $request->image_two;
            $image_three = $request->image_three;
            if($request->hasFile('image_one')){
                $image_one =$request->file('image_one');
                $image_one_file_name = time().'.'.$image_one->getClientOriginalExtension();
                $location_image_one = public_path('media/product/'.$image_one_file_name);
                Image::make($image_one)->resize(300,300)->save($location_image_one);
                $oldimageone = $product->image_one;
                $product->image_one = $image_one_file_name;
                Storage::delete($oldimageone);
            }
            if($request->hasFile('image_two')){
                $image_two =$request->file('image_two');
                $image_two_file_name = time().'.'.$image_two->getClientOriginalExtension();
                $location_image_two = public_path('media/product/'.$image_two_file_name );
                Image::make($image_two)->resize(300,300)->save($location_image_two);
                $oldimagetwo = $product->image_two;
                $product->image_two =  $image_two_file_name;
                Storage::delete($oldimagetwo);
            }
            if($request->hasFile('image_three')){
                $image_three =$request->file('image_three');
                $image_three_file_name = time().'.'.$image_three->getClientOriginalExtension();
                $location_image_three = public_path('media/product/'.$image_three_file_name);
                Image::make($image_three)->resize(300,300)->save($location_image_three);
                $oldimagethree = $product->image_three;
                $product->image_three = $image_three_file_name;
                Storage::delete($oldimagethree);
            }
            $product->save();
            $notification=array(
                'messege'=>'product updated successfully.',
                'alert-type'=>'success'
                    );
                return Redirect()->route('all.product')->with($notification); 
        }
      

}
