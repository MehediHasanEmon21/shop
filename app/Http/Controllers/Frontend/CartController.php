<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Cart;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class CartController extends Controller
{   

    public function show_cart(){

        $contents = Cart::content();
        return view('pages.cart',compact('contents'));
    }
    public function addCart(Request $request){

    	$product = DB::table('products')->where('id',$request->product_id)->first();

    	$price = $product->discount_price == NULL ? $product->selling_price : $product->discount_price;

        if (isset($product->product_color)) {

            $product_colors = explode(',', $product->product_color);
            $product_color = $product_colors[0];
        }else{
            $product_color = NULL;
        }

        if (isset($product->product_size)) {

            $product_sizes = explode(',', $product->product_size);
            $product_size = $product_sizes[0];
        }else{
            $product_size = NULL;
        }


        $data = [];

    	$data = [

    		'id' => $product->id,
    		'name' => $product->product_name,
    		'qty' => 1,
    		'price' => $price,
    		'weight'=> 550,
    		'options' => [
    			'image' => $product->image_one,
                'product_color' => $product_color,
                'product_size' => $product_size,
    		]
    	];


    	Cart::add($data);

    	return response()->json([
                        'success' => 'Successfully Added Cart',
                        'cart_total' => Cart::count()
                        
                        ]);


    	

    }


    public function allCart(){

    		$contents = Cart::content();
    		return response()->json($contents);

    }


    public function InsertCart(Request $request)
    {
          $id=$request->product_id;
          $product=DB::table('products')->where('id',$id)->first();
          $data=array();
          if ($product->discount_price == NULL) {
                        $data['id']=$product->id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;;
                        $data['price']= $product->selling_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;
                        $data['options']['color']=$request->color;
                        $data['options']['size']=$request->size;
                      Cart::add($data);
                       $notification=array(
                              'messege'=>'Successfully Done',
                               'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
           }else{
                       $data['id']=$product->id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;;
                        $data['price']= $product->discount_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;  
                        $data['options']['color']=$request->color;
                        $data['options']['size']=$request->size;
                        Cart::add($data);  
                      $notification=array(
                              'messege'=>'Successfully Done',
                               'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
         }
    }

    public function updatetCart(Request $request){

        Cart::update($request->productid, $request->qty);
        $notification=array(
                              'messege'=>'Successfully Update Cart',
                               'alert-type'=>'success'
                         );
        return Redirect()->back()->with($notification);

    }

    public function deleteCart($rowId){

      Cart::remove($rowId);
      $notification=array(
                        'messege'=>'Successfully Delete Cart',
                         'alert-type'=>'success'
                         );
      return Redirect()->back()->with($notification);

    }

    public function show_checkout(){

      if (Auth::check()) {
        $contents = Cart::content();
        return view('pages.checkout',compact('contents'));
        

      }else{

        $notification=array(
                    'messege'=>'Login First',
                     'alert-type'=>'error'
                     );
        return Redirect()->route('login')->with($notification);

      }

        

    }

    public function apply_coupon(Request $request){

      $coupon = $request->coupon;
      $check = DB::table('coupons')->where('coupon', $coupon)->first();
      if ($check) {

        Session::put('coupon',[
          'coupon' => $check->coupon,
          'discount' => $check->discount,
          'balance' => Cart::Subtotal() - $check->discount

        ]);
         $notification=array(
                    'messege'=>'Successfully Coupon Applied',
                     'alert-type'=>'success'
               );
        return Redirect()->back()->with($notification);

      }else{

        $notification=array(
                        'messege'=>'Coupon not Available',
                         'alert-type'=>'error'
                         );
        return Redirect()->back()->with($notification);

      }

    }

    public function destroy_coupon(){

      Session::forget('coupon');
      $notification=array(
                        'messege'=>'Coupon Destroyed',
                         'alert-type'=>'success'
                         );
      return Redirect()->back()->with($notification);

    }

}
