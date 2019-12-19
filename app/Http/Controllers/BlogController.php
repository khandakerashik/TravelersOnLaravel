<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\author;
use App\product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;
use Validator;

class BlogController extends Controller
{
    public function index(){

        $blog = DB::table('blog')->get(); 
        //echo $blog;
		return view('blog.index')->with('blog', $blog);
    } 
}