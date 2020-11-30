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
      $categories = DB::table('categories')->orderBy('category_name','ASC')->get();
      $brands = DB::table('brands')->orderBy('brand_name','ASC')->get();

      return view('pages.products',compact('products','categories','brands'));

    }

    public function subCategoryProduct($slug){

      $subcategory = DB::table('sub_categories')->where('slug',$slug)->first();
      $subcategory_id = $subcategory->id;

      $categories = DB::table('categories')->orderBy('category_name','ASC')->get();
      $brands = DB::table('brands')->orderBy('brand_name','ASC')->get();
      $products = DB::table('products')->where('subcategory_id',$subcategory_id)->paginate(15);

      return view('pages.products',compact('products','categories','brands'));

    }

    public function all_products(){

        $categories = DB::table('categories')->orderBy('category_name','ASC')->get();
        $brands = DB::table('brands')->orderBy('brand_name','ASC')->get();
        $products = DB::table('products')->orderBy('id','DESC')->paginate(15);

        $min_price = DB::table('products')->min('selling_price');
        $max_price = DB::table('products')->max('selling_price');

        return view('pages.products',compact('products','categories','brands','max_price','min_price'));


    }

    public function all_blog(){

        $post=DB::table('posts')->join('post_category','posts.category_id','post_category.id')->select('posts.*','post_category.category_name_en','post_category.category_name_bn')->get();
        return view('pages.blog',compact('post'));

    }

    public function contact(){

        return view('pages.contact');

    }



}
