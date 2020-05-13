<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function addCard($id){
$product = Product::where('id',$id)->first();
$data = array();
if($product->discount_price == NULL){

    $data['id'] = $product->id;
    $data['name'] = $product->product_name;
    $data['qty'] = 1;
    $data['price'] = $product->selling_price;
    $data['weight'] = 1;
    $data['options']['image'] = $product->image_one;
    $data['options']['color'] = '';
    $data['options']['size'] = '';
    Cart::add($data);
    return response()->json(['success'=>'Product successfully added to cart ']);
   

}else{
    $data['id'] = $product->id;
    $data['name'] = $product->product_name;
    $data['qty'] = 1;
    $data['price'] = $product->discount_price;
    $data['weight'] = 1;
    $data['options']['image'] = $product->image_one;
    $data['options']['color'] = '';
    $data['options']['size'] = '';
    Cart::add($data);
    return response()->json(['success'=>'Product successfully added to cart ']); 
}
    }
    public function checkcart(){
        $cartcontent = Cart::content();
        return response()->json($cartcontent );
    }

}

