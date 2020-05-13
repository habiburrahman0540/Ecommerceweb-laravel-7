<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductView($id,$product_name){
        $product = Product::join('categories','categories.id','products.category_id')
        ->join('subcategories','subcategories.id','products.subcategory_id')
        ->join('brands','brands.id','products.brand_id')
        ->select('products.*','categories.category_name','subcategories.subcategory_name','brands.brand_name')
        ->where('products.id',$id)
        ->first();
        $color = $product ->product_color;
        $product_color = explode(',',$color);
        $size = $product ->product_size;
        $product_size = explode(',', $size);
return view('pages.product_details',compact('product','product_color','product_size'));
    }
}
