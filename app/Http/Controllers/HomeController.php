<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\products;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Request $request){

		$blogs = DB::table('blog')
		->get();

		$events = DB::table('events')
		->get();
	
		return view('home.index')->with('blogs', $blogs)->with('events', $events);
	}
}





