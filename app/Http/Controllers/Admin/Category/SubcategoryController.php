<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
   }
    public function subcategory(){
        $category = Category::get();
        $subcategory = Subcategory::join('categories','subcategories.category_id','categories.id')
        ->select('subcategories.*','categories.category_name')
        ->get();
        return view('admin.category.subcategory',compact('category','subcategory'));
    }
    public function Storesubcategory(Request $request){
        $this->validate($request,[
            'subcategory_name'=>'required',
            'category_id'=>'required',
        ]);
        $subcategory = new Subcategory();
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        $notification=array(
            'messege'=>'Subcategory data inserted successfully.',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
    public function Deletebrand($id){
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        $notification=array(
            'messege'=>'Subcategory deleted successfully.',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
    public  function Editsubcategory($id){
        $subcategory = Subcategory::find($id);
        $category = Category::get();
        return view('admin.category.edit_subcategory',compact('subcategory','category'));
}
    public function updatesubcategory(Request $request,$id){
        $this->validate($request,[
            'subcategory_name'=>'required',
            'category_id'=>'required',
        ]);
        $subcategory = Subcategory::find($id);
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        $notification=array(
            'messege'=>'Subcategory data updated successfully.',
            'alert-type'=>'success'
             );
           return Redirect()->route('admin.subcategory')->with($notification);
    }
}