<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class WishlistController extends Controller
{
       public function addFavourite(Request $request){


        $userid=$request->auth_id;

        $check=DB::table('wishlists')->where('user_id',$userid)->where('product_id',$request->product_id)->first();

        $data = array(
            'user_id' => $userid, 
            'product_id'=>$request->product_id 
        );

        if ($userid) {
            if ($check) {
                // return \Response::json(['error' => 'Product Already has on your wishlist']);        
                return response()->json(['error' => 'Product Already has on your wishlist']);       
            }else{
                DB::table('wishlists')->insert($data);
                $wishlist_count = DB::table('wishlists')->where('user_id',$userid)->count();
             //   return \Response::json(['success' => 'Successfully Added on your wishlist']); 
             return response()->json([
                                'success' => 'Successfully Added on your wishlist',
                                'wishlist_count' => $wishlist_count
                                ]);         
            }
        }else{
            //return \Response::json(['error' => 'At first login your account']);
              return response()->json(['error' => 'At first login your account']);        
            }

        

    }

    public function Wishlist()
    {
        $userid=Auth::id();
        $product=DB::table('wishlists')->join('products','wishlists.product_id','products.id')
                          ->select('products.*','wishlists.user_id')
                          ->where('wishlists.user_id',$userid)
                          ->get();
           return view('pages.wishlist',compact('product'));             
    }
}
