<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Model\Product;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        $products = DB::table('products')
                            ->join('categories','products.category_id','categories.id')
                            ->join('brands','products.brand_id','brands.id')
                            ->select('products.*','categories.category_name','brands.brand_name')
                            ->orderBy('id','DESC')
                            ->get();
        return view('admin.pages.product.list',compact('products'));

    }

    public function create(){
    	$categories = DB::table('categories')->orderBy('category_name','ASC')->get();
    	$brands = DB::table('brands')->orderBy('brand_name','ASC')->get();
    	return view('admin.pages.product.create',compact('categories','brands'));
    }

    public function getSubcategory($id){

    	$subCategories = DB::table('sub_categories')->where('category_id',$id)->get();
    	return json_encode($subCategories);

    }

    public function store(Request $request){

        $product = new Product();

        $name_list =  explode(" ", $request->product_name);
        $name_list = array_map('strtolower', $name_list);
        $product_slug = implode("-", $name_list);
        $similar_slug = DB::table('products')->where('slug', 'like', $product_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $product_slug.'-'.Str::random(10);
        }
        else{
            $slug = $product_slug;
        }

        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->selling_price = $request->selling_price;
        $product->product_details = $request->product_details;
        $product->video_link = $request->video_link;
        $product->main_slider = $request->main_slider;
        $product->hot_deal = $request->hot_deal;
        $product->best_rated = $request->best_rated;
        $product->trend = $request->trend;
        $product->mid_slider = $request->mid_slider;
        $product->hot_new = $request->hot_new;
        $product->buyone_getone = $request->buyone_getone;
        $product->slug = $slug;

        $image_one = $request->file('image_one');
        $image_two = $request->file('image_two');
        $image_three = $request->file('image_three');

        if ($image_one && $image_two && $image_three) {
            
            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            $image_one_url = 'public/backend/images/product/'.$image_one_name;
            Image::make($image_one)->resize(300,300)->save($image_one_url);
            $product->image_one = $image_one_url;

            $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            $image_two_url = 'public/backend/images/product/'.$image_two_name;
            Image::make($image_two)->resize(300,300)->save($image_two_url);
            $product->image_two = $image_two_url;

            $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            $image_three_url = 'public/backend/images/product/'.$image_three_name;
            Image::make($image_three)->resize(300,300)->save($image_three_url);
            $product->image_three = $image_three_url;



        }

        $product->save();

        $notification=array(
             'messege'=>'Successfully Product Inserted ',
             'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);   


    }

    //active products
    public function active_product($id){

        $product = DB::table('products')->where('id',$id)->update(['status'=>1]);
        $notification=array(
             'messege'=>'Successfully Product Activate ',
             'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);   

    }

    public function deactive_product($id){

        $product = DB::table('products')->where('id',$id)->update(['status'=>0]);
        $notification=array(
             'messege'=>'Successfully Product Deactive ',
             'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);   

    }

    public function delete($id){

        $product = DB::table('products')->where('id',$id)->first();

        unlink($product->image_one);
        unlink($product->image_two);
        unlink($product->image_three);

        DB::table('products')->where('id',$id)->delete();
        $notification=array(
             'messege'=>'Successfully Product Delete ',
             'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);   

    }

    public function edit($id){

        $product = DB::table('products')->where('id',$id)->first();
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        $brands = DB::table('brands')->get();

        $data = [
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
            'subcategories' => $subcategories,

        ];

        return view('admin.pages.product.edit',['data' => $data]);
    


    }

    public function update(Request $request,$id){


        $validateData = $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'selling_price' => 'required',

        ]);

        $product =  Product::find($id);


        $name_list =  explode(" ", $request->product_name);
        $name_list = array_map('strtolower', $name_list);
        $product_slug = implode("-", $name_list);
        $similar_slug = DB::table('products')->where('slug', 'like', $product_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $product_slug.'-'.Str::random(10);
        }
        else{
            $slug = $product_slug;
        }

        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->selling_price = $request->selling_price;
        $product->discount_price = $request->discount_price;
        $product->product_details = $request->product_details;
        $product->video_link = $request->video_link;
        $product->main_slider = $request->main_slider;
        $product->hot_deal = $request->hot_deal;
        $product->best_rated = $request->best_rated;
        $product->trend = $request->trend;
        $product->mid_slider = $request->mid_slider;
        $product->hot_new = $request->hot_new;
        $product->buyone_getone = $request->buyone_getone;
        $product->slug = $slug;

        $up = $product->save();

        if ($up) {
           $notification=array(
             'messege'=>'Successfully Product Update ',
             'alert-type'=>'success'
            );
            return Redirect()->route('admin.product')->with($notification);   
        }else{
            $notification=array(
             'messege'=>'Nothing to Update ',
             'alert-type'=>'success'
            );
            return Redirect()->route('admin.product')->with($notification);   
        }

        

    }

    public function update_image(Request $request,$id){

        $old_image_one = $request->old_image_one;
        $old_image_two = $request->old_image_two;
        $old_image_three = $request->old_image_three;

        $image_one = $request->file('image_one');
        $image_two = $request->file('image_two');
        $image_three = $request->file('image_three');

        $product =  Product::find($id);

        if ($request->has('image_one') && $request->has('image_two') && $request->has('image_three')) {

            unlink($old_image_one);
            unlink($old_image_two);
            unlink($old_image_three);

            $image_one_url = $this->saveImage($image_one);
            $product->image_one = $image_one_url;

            $image_two_url = $this->saveImage($image_two);
            $product->image_two = $image_two_url;

            $image_three_url = $this->saveImage($image_three);
            $product->image_three = $image_three_url;
            

        }elseif($request->has('image_one') && $request->has('image_two')){

             unlink($old_image_one);
             unlink($old_image_two);

            $image_one_url = $this->saveImage($image_one);
            $product->image_one = $image_one_url;

            $image_two_url = $this->saveImage($image_two);
            $product->image_two = $image_two_url;

        }elseif($request->has('image_two') && $request->has('image_three')){
            unlink($old_image_two);
            unlink($old_image_three);

            $image_two_url = $this->saveImage($image_two);
            $product->image_two = $image_two_url;

            $image_three_url = $this->saveImage($image_three);
            $product->image_three = $image_three_url;

        }elseif($request->has('image_one') && $request->has('image_three')){

            unlink($old_image_one);
            unlink($old_image_three);

            $image_one_url = $this->saveImage($image_one);
            $product->image_one = $image_one_url;

            $image_three_url = $this->saveImage($image_three);
            $product->image_three = $image_three_url;
        }elseif($request->has('image_one')){
            unlink($old_image_one);

            $image_one_url = $this->saveImage($image_one);
            $product->image_one = $image_one_url;
        }elseif($request->has('image_two')){
            unlink($old_image_two);


            $image_two_url = $this->saveImage($image_two);
            $product->image_two = $image_two_url;
        }elseif($request->has('image_three')){
            unlink($old_image_three);

            $image_three_url = $this->saveImage($image_three);
            $product->image_three = $image_three_url;
        }else{
            $notification=array(
             'messege'=>'Please Select Image First',
             'alert-type'=>'error'
            );
          return Redirect()->route('admin.product')->with($notification);   
        }

        $product->save();

        $notification=array(
             'messege'=>'Image Updated Successfully ',
             'alert-type'=>'success'
            );
        return Redirect()->route('admin.product')->with($notification);   

    }


    public function saveImage($image){

        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image_url = 'public/backend/images/product/'.$image_name;
        Image::make($image)->resize(300,300)->save($image_url);
        return $image_url;

    }

    
}
