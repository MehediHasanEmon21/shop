<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function ProductSearch(Request $request)
    {	

      $brands=DB::table('brands')->get();
      $item=$request->search;
      $products=DB::table('products')
                            // ->join('brands','products.brand_id','brands.id')
                            // ->select('products.*','brands.brand_name')
                            ->where('product_name','LIKE', "%{$item}%")
                            // ->orWhere('brand_name','LIKE', "%{$item}%")
                            ->paginate(20);
       return view('pages.search',compact('brands','products'));       
    }

}
