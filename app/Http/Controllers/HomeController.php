<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blog;
use App\event;

class HomeController extends Controller
{
    public function index()
     {

    	$blog = blog::all()
                ->where('status',1)
               ->take(3);

        $event =event::all()
        		->take(3);    
       
		   return view('home.index')->with('blog',$blog)
		   							->with('event',$event);
	
	 }







}
