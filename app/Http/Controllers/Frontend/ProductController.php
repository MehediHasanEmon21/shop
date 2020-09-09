<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product($slug){

    	$product=DB::table('products')
    	->join('categories','products.category_id','categories.id')
    	->leftJoin('sub_categories','products.subcategory_id','sub_categories.id')
    	->join('brands','products.brand_id','brands.id')
    	->select('products.*','categories.category_name','sub_categories.subcategory_name','brands.brand_name')
    	->where('products.slug',$slug)
    	->first();

    	$product_color = explode(',', $product->product_color);
    	$product_size = explode(',', $product->product_size);

    	return view('pages.product_details',compact('product','product_color','product_size'));

    }

    public function AddCart(Request $request,$id)
    {
         $product=DB::table('products')->where('id',$id)->first();
          $data=array();
          if ($product->discount_price == NULL) {
                        $data['id']=$id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;
                        $data['price']= $product->selling_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;
                        $data['options']['color']=$request->color;
                        $data['options']['size']=$request->size;
                       Cart::add($data);
                        $notification=array(
                           'messege'=>'Successfully Added',
                           'alert-type'=>'success'
                         );
                       return Redirect()->to('/')->with($notification);
           }else{
                         $data['id']=$id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;
                        $data['price']= $product->discount_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;
                        $data['options']['color']=$request->color;
                        $data['options']['size']=$request->size;
                        Cart::add($data);  
                        $notification=array(
                              'messege'=>'Successfully Added',
                             'alert-type'=>'success'
                         );
                       return Redirect()->to('/')->with($notification);
         }
    }

    public function viewProduct(Request $request){

        $product=DB::table('products')
        ->join('categories','products.category_id','categories.id')
        ->leftJoin('sub_categories','products.subcategory_id','sub_categories.id')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','categories.category_name','sub_categories.subcategory_name','brands.brand_name')
        ->where('products.id',$request->id)
        ->first();

        $color = explode(',', $product->product_color);
        $size = explode(',', $product->product_size);

        return response()->json([
            'product' => $product,
            'color' => $color,
            'size' => $size,
        ]);

    }

    public function categoryProduct($slug){

      $category = DB::table('categories')->where('slug',$slug)->first();
      $category_id = $category->id;

      $products = DB::table('products')->where('category_id',$category_id)->paginate(15);

      return view('pages.products',compact('products'));

    }

    public function subCategoryProduct($slug){

      $subcategory = DB::table('sub_categories')->where('slug',$slug)->first();
      $subcategory_id = $subcategory->id;

      $products = DB::table('products')->where('subcategory_id',$subcategory_id)->paginate(15);

      return view('pages.products',compact('products'));

    }



}
