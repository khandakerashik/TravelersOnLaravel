<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blog;
use App\comment;

class BlogsController extends Controller
{
    public function index(){

    	$blogCount=blog::all()
    				->where('status',1)
    			   ->count();

    	$blog=blog::all()
    			->where('status',1);


		return view('blogs.index')->with('count',$blogCount)
								  ->with('blog',$blog);
	}

	public function blog_details($id){


		$blog=blog::where('id',$id)
					->get();
		$comment=comment::where('postid',$id)
		 				 ->get();
		$commentCount=comment::where('postid',$id)
					  ->count();

		
		return view('blogs.blog_details')->with('blog',$blog)
										 ->with('count',$commentCount)
										 ->with('comment',$comment);

	}


	public function insertComment($id,Request $req){

		$blog=blog::where('id',$id)
					->get();

		$todayDate = date("Y-m-d");

		$comment = new comment();
        $comment->text = $req->comment;
        $comment->postby =$req->session()->get('user')[0]['email'];
        $comment->name =$req->session()->get('user')[0]['name'];
        $comment->postid =$id;
        $comment->blogpostemail =$blog[0]['postby'];
        $comment->date =$todayDate;

        if($comment->save()){
            return redirect()->route('blogs.blog_details',$id);
        }else{
            return redirect()->route('blogs.blog_details',$id);
                                                       
        }

    	
	}



}
