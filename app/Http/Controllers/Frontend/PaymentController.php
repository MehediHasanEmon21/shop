<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Auth;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class PaymentController extends Controller
{
    public function index(){

    	$cart=Cart::content();
        return view('pages.payment',compact('cart'));


    }

    public function payment(Request $request){

    	$cart=Cart::content();
    	$data=array();
		 $data['name']=$request->name;
		 $data['email']=$request->email;
		 $data['phone']=$request->phone;
		 $data['address']=$request->address;
		 $data['city']=$request->city;
		 $data['payment']=$request->payment;

		 if ($request->payment == 'stripe') {

		 	 return view('pages.payment.stripe',compact('data','cart'));
		 
		 }elseif($request->payment == 'paypal'){

		 }elseif($request->payment == 'ideal'){

		 }else{
		 	echo"handcash";
		 }


    }

    public function stripeCharge(Request $request){



    	   $total = $request->total;
            // Set your secret key: remember to change this to your live secret key in production
			// See your keys here: https://dashboard.stripe.com/account/apikeys
			\Stripe\Stripe::setApiKey('sk_test_oRAFkDgy88u6oJrpjSYwvSEi00w4UQBdxz');

			// Token is created using Checkout or Elements!
			// Get the payment token ID submitted by the form:
			$token = $_POST['stripeToken'];

			$charge = \Stripe\Charge::create([
			    'amount' => $total*100,
			    'currency' => 'usd',
			    'description' => 'Buying Details',
			    'source' => $token,
			    'metadata' => ['order_id' => uniqid()],
			]);

			$data=array();
			$data['user_id']=Auth::id();
			$data['payment_id']=$charge->payment_method;
			$data['paying_amount']=$charge->amount/100;
			$data['blnc_transection']=$charge->balance_transaction;
			$data['stripe_order_id']=$charge->metadata->order_id;
			$data['shipping']=$request->shipping;
			$data['vat']=$request->vat;
			$data['total']=$request->total;
            $data['payment_type']=$request->payment_type;
			 if (Session::has('coupon')) {
			 	 $data['subtotal'] = Session::get('coupon')['balance'];
    	     }else{
    	  	      $data['subtotal']=Cart::Subtotal() ;
    	    }
    	    $data['status']=0;
    	    $data['date']=date('d-m-y');
    	    $data['month']=date('F');
    	    $data['year']=date('Y');
            $data['status_code']=mt_rand(100000,999999); 
    	    $order_id=DB::table('orders')->insertGetId($data);

    	    	$shipping=array();
    	    	$shipping['order_id']=$order_id;
    	    	$shipping['name']=$request->ship_name;
    	    	$shipping['email']=$request->ship_email;
    	    	$shipping['phone']=$request->ship_phone;
    	    	$shipping['address']=$request->ship_address;
    	    	$shipping['city']=$request->ship_city;
    	    	DB::table('shippings')->insert($shipping);

    	    	//insert data into orderdeatils
    	    	$content=Cart::content();
    	    	$details=array();
    	    	foreach ($content as $row) {
    	    		$details['order_id']= $order_id;
    	    		$details['product_id']=$row->id;
    	    		$details['product_name']=$row->name;
    	    		$details['product_color']=$row->options->color;
    	    		$details['product_size']=$row->options->size;
    	    		$details['product_quantity']=$row->qty;
    	    		$details['singleprice']=$row->price;
    	    		$details['totalprice']=$row->qty * $row->price;
    	    		DB::table('order_details')->insert($details);
    	    	}

               

    	    	Cart::destroy();
    	    	 if (Session::has('coupon')) {
			 	 Session::forget('coupon');
    	     }

    	       $notification=array(
                              'messege'=>'Successfully Done',
                               'alert-type'=>'success'
                         );
                 return Redirect()->to('/')->with($notification);


    }

    public function SuccessList()
    {
         $order=DB::table('orders')->where('user_id',Auth::id())->where('status',3)->orderBy('id','DESC')->limit(10)->get();
         return view('pages.returnorder',compact('order'));
    }

    public function RequestReturn($id)
    {
        DB::table('orders')->where('id',$id)->update(['return_order'=>1]);
         $notification=array(
                              'messege'=>'Order Return request done please wait for our confirmation email',
                               'alert-type'=>'success'
                         );
                 return Redirect()->back()->with($notification);
    }

    public function callBack(Request $request){

        dd('ok');

    }
}
