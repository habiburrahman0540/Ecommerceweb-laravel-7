<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
   }

   public function category(){
      
    $category =  Category::all();
       return view('admin.category.category',compact('category'));
   }

public function storecategory(Request $request){
 $this->validate($request,[
    'category_name'=>'required|unique:categories|max:255',
 ]);
 $category = new Category();
 $category->category_name=$request->category_name;
 $category_image = $request->category_image;
            if($request->hasFile('category_image')){
               $category_image =$request->file('category_image');
                $category_image_file_name = time().'.'.$category_image->getClientOriginalExtension();
                $location_category_image = public_path('media/category/'.$category_image_file_name);
                Image::make($category_image)->resize(300,300)->save($location_category_image);
                $category->category_image = $category_image_file_name;
            }

 $category->save();
 $notification=array(
    'messege'=>'Category save successfully.',
    'alert-type'=>'success'
     );
  return Redirect()->back()->with($notification);
}
public function Deletecategory($id){
   $category=Category::find($id);
   $old_category_image = $category->category_image;
Storage::delete($old_category_image);
   $category->delete();
   $notification=array(
      'messege'=>'Category deleted successfully.',
      'alert-type'=>'success'
       );
     return Redirect()->back()->with($notification);
}
public function Editcategory($id){
   $category = Category::where('id',$id)->first();
   return view('admin.category.edit_category',compact('category'));
}

   public function Updatecategory(Request $request ,$id){
      $this->validate($request,[
         'category_name'=>'required|max:255',
      ]);

      $category = Category::find($id);
      $category->category_name = $request->category_name;
      $category_image = $request->category_image;
            if($request->hasFile('category_image')){
                $category_image =$request->file('category_image');
                $category_image_file_name = time().'.'.$category_image->getClientOriginalExtension();
                $location_category_image = public_path('media/category/'.$category_image_file_name);
                Image::make($category_image)->resize(300,300)->save($location_category_image);
                $oldcategory_image = $category->category_image;
                $category->category_image = $category_image_file_name;
                Storage::delete($oldcategory_image);
            }
      $category->save();
      
      
         $notification=array(
            'messege'=>'Category updated successfully.',
            'alert-type'=>'success'
             );
           return Redirect()->route('admin.categories')->with($notification);
      
   }


}
