<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addwishlist(Request $request,$id){

        $wishlist = Wishlist::where('user_id',Auth::id())->where('product_id',$id)->first();
        $userid = Auth::id();
$data = [
    'user_id' => $userid,
    'product_id' => $id,
];

        if(Auth::check()){
            if($wishlist){
                return response()->json(['error'=>'You already added this product in your wishlist']);
                
                
            }else{
                $wishlist = new Wishlist();
                
                $wishlist->insert($data);
                
                    return response()->json(['success'=>'This product in your wishlist']);
            }

        }else{
            return response()->json(['error'=>'you should to login first']);
            
        }

    }
}
