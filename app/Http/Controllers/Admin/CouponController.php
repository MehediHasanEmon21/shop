<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Model\Coupon;
use DB;
class CouponController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

    	$coupons = Coupon::orderBy('id','DESC')->get();
    	return view('admin.pages.coupon',compact('coupons'));
    }

    public function store(Request $request){

    	$coupon = new Coupon();
    	$coupon->coupon = $request->coupon;
    	$coupon->discount = $request->discount;
    	$coupon->save();
    	$notification=array(
                    'messege'=>'Coupon Added Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification);

    }

    public function update(Request $request){

    	$coupon = Coupon::find($request->coupon_id);
    	$coupon->coupon = $request->coupon;
    	$coupon->discount = $request->discount;
    	$coupon->save();
    	$notification=array(
                    'messege'=>'Coupon Updated Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification);
    }

    public function delete($id){

    	$coupon = Coupon::find($id);
    	$coupon->delete();
    	$notification=array(
                    'messege'=>'Coupon Deleted Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification);


    }

    public function Seo()
    {
        $seo=DB::table('seo')->first();
        return view('admin.coupon.seo',compact('seo'));
    }

    public function UpdateSeo(Request $request)
    {
        $id=$request->id;
         $data=array();
         $data['meta_title']=$request->meta_title;
         $data['meta_author']=$request->meta_author;
         $data['meta_tag']=$request->meta_tag;
         $data['meta_description']=$request->meta_description;
         $data['google_analytics']=$request->google_analytics;
         $data['bing_analytics']=$request->bing_analytics;
         DB::table('seo')->where('id',$id)->update($data);
         $notification=array(
                 'messege'=>'SEO Updated',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }



    
}
