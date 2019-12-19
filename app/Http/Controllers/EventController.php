<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\author;
use App\product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;
use Validator;

class EventController extends Controller
{
    public function index(){

        $events = DB::table('events')->where('status','1')
		->get(); 
        //echo $blog;
		return view('event.index')->with('events', $events);
    } 
}