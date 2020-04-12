<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){

    	 $feature_products = DB::table('products')->orderBy('id','DESC')->where('status',1)->limit(18)->get();
    	 foreach($feature_products as $fp){
            $is_favaurite = DB::table('wishlists')->where('product_id',$fp->id)->where('user_id',Auth::id())->first();
            $fp->favourite = $is_favaurite;
    	 	$fp->percent = $this->calculationPercentage($fp);
    	 }
    	 $trend_products = DB::table('products')->orderBy('id','DESC')->where('status',1)->where('trend',1)->get();
    	 foreach ($trend_products as $key => $tp) {
    	 	$tp->percent = $this->calculationPercentage($tp);
            $is_favaurite = DB::table('wishlists')->where('product_id',$tp->id)->where('user_id',Auth::id())->first();
            $tp->favourite = $is_favaurite;
    	 }
    	 $best_products = DB::table('products')->orderBy('id','DESC')->where('status',1)->where('best_rated',1)->limit(13)->get();
    	 foreach ($best_products as $key => $bp) {
    	 	$bp->percent = $this->calculationPercentage($bp);
            $is_favaurite = DB::table('wishlists')->where('product_id',$bp->id)->where('user_id',Auth::id())->first();
            $bp->favourite = $is_favaurite;
    	 }
    	 $hot_deals = DB::table('products')
    	 				->join('categories','products.category_id','categories.id')
    	 				->select('products.*','categories.category_name')
    	 				->orderBy('id','DESC')
    	 				->where('status',1)
    	 				->where('hot_deal',1)
    	 				->limit(4)
    	 				->get();
    	 $mid_sliders = DB::table('products')
    	 				->join('brands','products.brand_id','brands.id')
    	 				->select('products.*','brands.brand_name')
    	 				->orderBy('id','DESC')
    	 				->where('status',1)
    	 				->where('mid_slider',1)
    	 				->limit(4)
    	 				->get();
        $buyone_getone = DB::table('products')
                        ->join('categories','products.category_id','categories.id')
                        ->select('products.*','categories.category_name')
                        ->orderBy('id','DESC')
                        ->where('status',1)
                        ->where('buyone_getone',1)
                        ->orderBy('id','DESC')
                        ->limit(4)
                        ->get();
        $categories = DB::table('categories')->orderBy('category_name','ASC')->limit(3)->get();

        foreach ($categories as $key => $category) {
            $CategoryProducts = DB::table('products')->where('category_id',$category->id)->get();
            $category->products = $CategoryProducts;
        }

        

        $brands = DB::table('brands')->select('brand_logo')->get();
        

        // return $categories;
    	 
    	return view('pages.index',compact('feature_products','trend_products','best_products','hot_deals','mid_sliders','categories','brands','buyone_getone'));

    }

    public function calculationPercentage($p){

    	$discount = $p->selling_price - $p->discount_price;
	    $discount_in_percent = ($discount/$p->selling_price ) * 100;
	    return $discount_in_percent;

    }


}
