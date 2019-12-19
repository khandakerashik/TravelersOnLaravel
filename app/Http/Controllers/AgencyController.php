<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\author;
use App\product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;
use Validator;

class AgencyController extends Controller
{
    public function index(){

		return view('admin.index');
    }
    public function home(){

		return view('admin.home');
	}

    function users(Request $request){
        //$users = User::all();
        $users = DB::table('users')->where('status','1')
        ->get(); 
        
        if($request->session()->has('name')){
    		   	return view('admin.userlist')->with('users', $users);
    	}else{
    		return redirect()->route('login.index');
    	}
    }
    function userprofiles(Request $request){
        $user = DB::table('users')->where('id', session('user.id'))
		->get(); 
	
		return view('admin.profile')->with('users', $user);
    }
    function products(Request $request){
        $product = DB::table('products')
		->get(); 
		return view('admin.products')->with('product', $product);
    }

    function pending(Request $request){
        $users = users::where('status', '0')
        ->get(); 
        
        if($request->session()->has('name')){
    		   	return view('admin.pending')->with('users', $users);
    	}else{
    		return redirect()->route('login.index');
    	}
    }

    function details($id){
        $user = DB::table('authors')->where('id', $id)
					->get(); 
                
            return view('admin.details')->with('users', $user);
    }


    function edit($id){
        $user = DB::table('products')->where('id', $id)
        ->get(); 
    
        return view('admin.edit')->with('users', $user);
    }
    function approve(Request $req, $id){

    	$user = users::find($id);
        $user->status = '1';
        $user->save();
        
        return redirect()->route('admin.userlist');
        

    }
    function capprove($id){
        $user = DB::table('users')->where('id', $id)
        ->get(); 
    
        return view('admin.approve')->with('users', $user);
    }
    function ban(Request $req, $id){

    	$user = users::find($id);
        $user->status = '0';
        $user->save();
        
        return redirect()->route('admin.userlist');
        

    }
    function cban($id){
        $user = DB::table('users')->where('id', $id)
        ->get(); 
    
        return view('admin.ban')->with('users', $user);
    }
    
	
	function update(Request $req, $id){
        $validation = Validator::make($req->all(), [
            'name'=>'required',
            'contact'=>'required',
            'password'=>'required|max:4'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }

    	$author = author::find($id);
        $author->name = $req->name;
        $author->password = $req->password;
        $author->contact = $req->contact;
        $author->save();
        
        return redirect()->route('author.index');
        

    }
    function delete($id){
        $user = DB::table('authors')->where('id', $id)
        ->get(); 
    
        return view('admin.delete')->with('users', $user);
    }

    function destroy($id){
    	users::destroy($id);
    	return redirect()->route('admin.index');
    }

    function add(){

        return view('admin.addproduct');
    }

    function insert(Request $req){

        $validation = Validator::make($req->all(), [
            'name'=>'required|min:5',
            'category'=>'required',
            'brand'=>'required',
            'price' =>'required|integer'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }

            $product = new product();
            $product->product_name = $req->name;
            $product->brand = $req->brand;
            $product->price = $req->price;
            $product->category = $req->category;
            $product->added_by= $req->session()->get('name');
            if($product->save()){
                return redirect()->route('product.add');
                }
                else{
                    return redirect()->route('product.add');
                }
        }

    
}
