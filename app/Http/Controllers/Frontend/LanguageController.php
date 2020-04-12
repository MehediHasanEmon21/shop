<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class LanguageController extends Controller
{
    public function bangla(){

    	Session::get('language');
     	session()->forget('language');
     	Session::put('language','bangla');
     	return redirect()->back();



    }

     public function english(){

    	Session::get('language');
     	session()->forget('language');
     	Session::put('language','english');
     	return redirect()->back();

    	

    }
}
