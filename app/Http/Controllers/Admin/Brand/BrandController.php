<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Admin\Model\Brand;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

    	$brands = DB::table('brands')->orderBy('id','DESC')->get();
    	return view('admin.brand.brands',compact('brands'));

    }

    public function store(Request $request){

 
    	 $name = $request->brand_name;
    	 $image = $request->file('image');

    	$name_list =  explode(" ", $name);
        $name_list = array_map('strtolower', $name_list);
        $brand_slug = implode("-", $name_list);
        $similar_slug = DB::table('brands')->where('slug', 'like', $brand_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $brand_slug.'-'.Str::random(10);
        }
        else{
            $slug = $brand_slug;
        }

    	 $brand = new Brand();
    	 $brand->brand_name = $name;
    	 $brand->slug = $slug;

    	 if ($image) {
    	 	$unique_str = Str::random(10);
    	 	$ext=strtolower($image->getClientOriginalExtension());
    	 	$image_name = $unique_str.'.'.$ext;
    	 	$upload_path = 'public/backend/images/brand/';
    	 	$image_url = $upload_path.$image_name;
    	 	$success = $image->move($upload_path,$image_name);
    	 	if ($success) {
    	 		$brand->brand_logo = $image_url;
    	 	}
    	 	
    	 	$brand->save();
    	 	$notification=array(
                    'messege'=>'Brand Added Successfully',
                    'alert-type'=>'success'
                     );
    		return Redirect()->back()->with($notification);
    	 }else{
    	 	$brand->save();
    	 	$notification=array(
                    'messege'=>'Brand Added Successfully',
                    'alert-type'=>'success'
                     );
    		return Redirect()->back()->with($notification);

    	 }

    }

    public function update(Request $request){

        $id = $request->id;
        $brand_name = $request->brand_name;

        $name_list =  explode(" ", $brand_name);
        $name_list = array_map('strtolower', $name_list);
        $brand_slug = implode("-", $name_list);
        $similar_slug = DB::table('brands')->where('slug', 'like', $brand_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $brand_slug.'-'.Str::random(10);
        }
        else{
            $slug = $brand_slug;
        }

        $image = $request->file('image');

        $brand = Brand::findorfail($id);
        $brand->brand_name = $brand_name;
        $brand->slug = $slug;

        if (isset($image)) {

            $old_brand = DB::table('brands')->where('id',$id)->first();
            $old_logo = $old_brand->brand_logo;
            if (file_exists($old_logo)) {
                 unlink($old_logo);
            }
           

            $unique_str = Str::random(10);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_name = $unique_str.'.'.$ext;
            $upload_path = 'public/backend/images/brand/';
            $image_url = $upload_path.$image_name;
            $success = $image->move($upload_path,$image_name);
            if ($success) {
                $brand->brand_logo = $image_url;
            }


        }

        $brand->save();

        $notification=array(
                    'messege'=>'Brand Update Successfully',
                    'alert-type'=>'success'
                     );
        return Redirect()->back()->with($notification);



    }

    public function delete($id){

        $old_brand = DB::table('brands')->where('id',$id)->first();
        $old_logo = $old_brand->brand_logo;
        if (file_exists($old_logo)) {
             unlink($old_logo);
        }

        $brand = Brand::findorfail($id);
        $brand->delete();

        $notification=array(
                        'messege'=>'Brand Deleted Successfully',
                        'alert-type'=>'success'
                      );
        return Redirect()->back()->with($notification);


    }
}
