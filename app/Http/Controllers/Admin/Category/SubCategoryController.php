<?php

namespace App\Http\Controllers\Admin\Category;

use App\Admin\Model\SubCategory;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{	
	 public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

    	$categories = DB::table('categories')->orderBy('category_name','ASC')->get();
    	$sub_categories = DB::table('sub_categories')->orderBy('id','DESC')->get();
    	return view('admin.category.sub_categories',compact('categories','sub_categories'));

    }

    public function store(Request $request){


    	$name_list =  explode(" ", $request->subcategory_name);
        $name_list = array_map('strtolower', $name_list);
        $subcategory_slug = implode("-", $name_list);
        $similar_slug = DB::table('sub_categories')->where('slug', 'like', $subcategory_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $subcategory_slug.'-'.Str::random(10);
        }
        else{
            $slug = $subcategory_slug;
        }

    	$subcategory = new SubCategory();
    	$subcategory->subcategory_name = $request->subcategory_name;
    	$subcategory->category_id = $request->category_id;
    	$subcategory->slug = $slug;
    	$subcategory->save();
    	$notification=array(
                    'messege'=>'SubCategory Added Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification);



    }

    public function delete($id){

    	$subcategory =SubCategory::findorfail($id);
    	$subcategory->delete();
    	$notification=array(
                    'messege'=>'SubCategory Deleted Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification);


    }

    public function update(Request $request){

    	$name_list =  explode(" ", $request->sub_category_name);
        $name_list = array_map('strtolower', $name_list);
        $subcategory_slug = implode("-", $name_list);
        $similar_slug = DB::table('sub_categories')->where('slug', 'like', $subcategory_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $subcategory_slug.'-'.Str::random(10);
        }
        else{
            $slug = $subcategory_slug;
        }

    	$subcategory = SubCategory::findorfail($request->id);
    	$subcategory->subcategory_name = $request->sub_category_name;
    	$subcategory->category_id = $request->category_id;
    	$subcategory->slug = $slug;
    	$subcategory->save();
    	$notification=array(
                    'messege'=>'SubCategory Updated Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification);


    }
}
