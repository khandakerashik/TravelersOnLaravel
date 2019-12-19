<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\products;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Request $request){

		$user = DB::table('users')->where('id', session('user.userId'))
		->get(); 
	
		return view('home.index')->with('users', $user);
	}
	function homeram(Request $request){

		$products = DB::table('products')->get(); 
    	return view('products.homeram')->with('product', $products);

    }
}





