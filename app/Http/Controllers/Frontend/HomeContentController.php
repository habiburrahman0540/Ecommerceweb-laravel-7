<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\Subcategory;
use App\Product;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function HomeContent(){
        $category = Category::all();
        $subcategory = Subcategory::all();
       
        $slider = Product::join('brands','brands.id','products.brand_id')
                ->select('products.*','brands.brand_name')
                ->where('main_slider',1)->orderBy('id','DESC')
                ->first();
        $featured = Product::where('status',1)->orderBy('id','DESC')->limit(8)->get();
        $trend = Product::where('status',1)->where('trend',1)->orderBy('id','DESC')->limit(8)->get();
         $bestrated = Product::where('status',1)->where('best_rated',1)->orderBy('id','DESC')->limit(8)->get();
         $Hotdeals = Product::join('brands','products.brand_id','brands.id')
                    ->select('products.*','brands.brand_name')
                    ->where('status',1)->where('hot_deal',1)->orderBy('id','DESC')->limit(5)->get();
        $mid_slider = $product = Product::join('categories','products.category_id','categories.id')
                    ->join('brands','products.brand_id','brands.id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->where('products.mid_slider',1)->orderBy('id','DESC')->limit(3)
                    ->get();
         
        return view('pages.index',compact('category','subcategory','slider','featured','trend','bestrated','Hotdeals','mid_slider'));
    }
}
