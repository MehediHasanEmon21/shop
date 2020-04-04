<?php

namespace App\Http\Controllers\Admin\Category;

use App\Admin\Model\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        $categories = DB::table('categories')->orderBy('id','DESC')->get();
    	return view('admin.category.categories',compact('categories'));
    }

    public function store(Request $request){

    	// $validateData = $request->validate([
    	// 	'category_name' => 'required|unique:categories'
    	// ]);

        $name_list =  explode(" ", $request->category_name);
        $name_list = array_map('strtolower', $name_list);
        $category_slug = implode("-", $name_list);
        $similar_slug = DB::table('categories')->where('slug', 'like', $category_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $category_slug.'-'.Str::random(10);
        }
        else{
            $slug = $category_slug;
        }

    	$category = new Category();
    	$category->category_name = $request->category_name;
    	$category->slug = preg_replace("/\//", "-", $slug);
    	$category->save();
    	$notification=array(
                    'messege'=>'Category Added Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification);



    }

    public function update(Request $request){

        $name_list =  explode(" ", $request->category_name);
        $name_list = array_map('strtolower', $name_list);
        $category_slug = implode("-", $name_list);
        $similar_slug = DB::table('categories')->where('slug', 'like', $category_slug.'%')->get();
        if(count($similar_slug) > 0){
            $slug = $category_slug.'-'.Str::random(10); 
        }
        else{
            $slug = $category_slug;
        }

        $category = Category::findorfail($request->category_id);
        $category->category_name = $request->category_name;
        $category->slug = preg_replace("/\//", "-", $slug);
        $category->save();
        $notification=array(
                    'messege'=>'Category Updated Successfully',
                    'alert-type'=>'success'
                     );
        return Redirect()->back()->with($notification);

    }

    public function delete($id){

        $category = Category::findorfail($id);
        $category->delete();
        $notification=array(
                    'messege'=>'Category Deleted Successfully',
                    'alert-type'=>'success'
                     );
        return Redirect()->back()->with($notification);
    }
}
