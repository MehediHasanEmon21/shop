<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Newslater;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewslatterController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function store(Request $request){

    	$validateData = $request->validate([
    		'email' => 'required'
    	]);

    	$newslater = new Newslater();
    	$newslater->email = $request->email;
    	$newslater->save();

    	$notification=array(
                    'messege'=>'Subcribe Successfully',
                    'alert-type'=>'success'
                     );
    	return Redirect()->back()->with($notification); 

    }

    public function newsletter(){

        $newsletters = Newslater::orderBy('id','DESC')->get();
        return view('admin.pages.newslater',compact('newsletters'));
    }

    public function delete($id){
        $newsletter = Newslater::find($id);
        $newsletter->delete();
        $notification=array(
                    'messege'=>'Deleted Successfully',
                    'alert-type'=>'success'
                     );
        return Redirect()->back()->with($notification); 
    }
}
