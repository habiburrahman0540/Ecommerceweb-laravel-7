<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Post_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
   }


public function Blogcatlist(){
    $blogcat = Post_category::get();
    return view('admin.blog.category.index',compact('blogcat'));
}
public function Blogcatstore(Request $request){
    $this->validate($request,[
        'category_name_en'=>'required|unique:post_categories|max:255',
        'category_name_ban'=>'required|unique:post_categories|max:255',
     ]);
     $Blogcategory = new Post_category();
     $Blogcategory->category_name_en=$request->category_name_en;
     $Blogcategory->category_name_ban=$request->category_name_ban;
     $Blogcategory->save();
     $notification=array(
        'messege'=>'Blog Category save successfully.',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification);
}


public function Blogcatdelete($id){
    $blog_cat = Post_category::find($id);
    $blog_cat->delete();
    $notification=array(
        'messege'=>'Blog Category deleted successfully.',
        'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
}

public function BlogcatEdit($id){
    $blog_cat = Post_category::find($id);
    return view('admin.blog.category.edit',compact('blog_cat'));
}

public function BlogcatUpdate(Request $request ,$id){
    $this->validate($request,[
        'category_name_en'=>'required|max:255',
        'category_name_ban'=>'required|max:255',
     ]);
     $Blogcategory = Post_category::find($id);
     $Blogcategory->category_name_en=$request->category_name_en;
     $Blogcategory->category_name_ban=$request->category_name_ban;
     $Blogcategory->save();
     $notification=array(
        'messege'=>'Blog Category updated successfully.',
        'alert-type'=>'success'
         );
       return Redirect()->route('blog.category.list')->with($notification);
}
public function Create(){
    $postcategory = Post_category::all();
    return view('admin.blog.create',compact('postcategory'));
}

public function StoreBlogpost(Request $request){
    $blogpost = new Post();
    $blogpost->post_title_en= $request->post_title_en;
    $blogpost->post_title_ban= $request->post_title_ban;
    $blogpost->category_id= $request->category_id;
    $blogpost->details_en= $request->details_en;
    $blogpost->details_ban= $request->details_ban;
    $post_image = $request->post_image;
  
    if($request->hasFile('post_image')){
        $post_image =$request->file('post_image');
        $post_image_file_name = time().'.'.$post_image->getClientOriginalExtension();
        $location_post_image = public_path('media/post/'.$post_image_file_name);
        Image::make($post_image)->resize(600,450)->save($location_post_image);
        $blogpost->post_image = $post_image_file_name;
    }


    $blogpost->save();
    $notification=array(
        'messege'=>'Post inserted successfully.',
        'alert-type'=>'success'
            );
        return Redirect()->route('all.blog.post')->with($notification);
}
public function index(){
    $post = Post::join('post_categories','post_categories.id','posts.category_id')->select('posts.*','post_categories.category_name_en')->get();
    return view('admin.blog.index',compact('post'));
}

public function DeletePost($id){
    $post = Post::find($id);
$post_image = $post->post_image;
Storage::delete($post_image);
$post->delete();
$notification=array(
    'messege'=>'Post deleted successfully.',
    'alert-type'=>'success'
        );
    return Redirect()->back()->with($notification);
}
public function EditPost($id){
    $post_cat = Post_category::all();
$blogpost = Post::find($id);
return view('admin.blog.edit',compact('blogpost','post_cat'));
}
public function UpdatePost(Request $request ,$id){
    $blogpost =  Post::find($id);
    $blogpost->post_title_en= $request->post_title_en;
    $blogpost->post_title_ban= $request->post_title_ban;
    $blogpost->category_id= $request->category_id;
    $blogpost->details_en= $request->details_en;
    $blogpost->details_ban= $request->details_ban;
    $post_image = $request->post_image;
  
    if($request->hasFile('post_image')){
        $post_image =$request->file('post_image');
        $post_image_file_name = time().'.'.$post_image->getClientOriginalExtension();
        $location_post_image = public_path('media/post/'.$post_image_file_name);
        Image::make($post_image)->resize(600,450)->save($location_post_image);
        $oldimage = $blogpost->post_image;
        $blogpost->post_image = $post_image_file_name;
        Storage::delete($oldimage);
    }


    $blogpost->save();
    $notification=array(
        'messege'=>'Post updated successfully.',
        'alert-type'=>'success'
            );
        return Redirect()->route('all.blog.post')->with($notification);
        }
        public function ViewPost($id){
           
            $post = Post::join('post_categories','post_categories.id','posts.category_id')->select('posts.*','post_categories.category_name_en')
            ->where('posts.id',$id)
            ->first();
            return view('admin.blog.showpost',compact('post'));
        }

}
