<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\event;
use App\product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;
use Validator;

class AdminController extends Controller
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
    function profile(Request $request){
        $admin = DB::table('admins')->where('email', session('user.email'))
		->get(); 
	
		return view('admin.profile')->with('admin', $admin);
    }
    function freakslist(Request $request){
        $freaks = DB::table('freaks')
		->get(); 
		return view('admin.freaks')->with('freaks', $freaks);
    }
    function agencylist(Request $request){
        $agencies = DB::table('travel_agencies')
		->get(); 
		return view('admin.agencies')->with('agencies', $agencies);
    }

    function pendingevents(Request $request){
        $events = event::where('status', '0')
        ->get(); 
    	return view('admin.pendingevents')->with('events', $events);

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
    function confirmapproveevent(Request $req, $id){

    	$event = event::find($id);
        $event->status = '1';
        $event->save();
        
        return redirect()->route('admin.pendingevents');
        

    }
    function approveevent($id){
        $event = DB::table('events')->where('id', $id)
        ->get(); 
    
        return view('admin.confirmapproveevent')->with('event', $event);
    }

    function deleteevents($id){
        $event = DB::table('events')->where('id', $id)
        ->get(); 
    
        return view('admin.confirmdeleteevent')->with('event', $event);
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

    function changepassword(){
        $user = DB::table('admins')->where('email', session('user.email'))
        ->get(); 
    
        return view('admin.changepassword')->with('users', $user);
    }
    function messages(){
        $messages = DB::table('admin_message')
        ->get(); 
    
        return view('admin.messages')->with('messages', $messages);
    }

    function notifications(){
        $notifications = DB::table('notification')
            ->join('events', 'notification.eventid', '=', 'events.id')
            ->select('notification.*', 'events.*')
            ->get();
    
        return view('admin.notifications')->with('notifications', $notifications);
    }


    function insertpassword(Request $req, $id){
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

    function confirmdeleteevent($id){
    	event::destroy($id);
    	return redirect()->route('admin.pendingevents');
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

        public function searchfreaks(Request $request)
            {
                if($request->ajax())
                {
                    $output="";
                    $freaks=DB::table('freaks')
                    ->where('name', 'like', '%'. $request->search.'%')
                    ->orWhere('phone', 'like', '%'. $request->search.'%')
                    ->orWhere('email', 'like', '%'. $request->search.'%')
                    ->get();
                    if($freaks)
                    {
                        foreach ($freaks as $key => $freak) {
                        $output.='<tr>'.
                        '<td>'.$freak->name.'</td>'.
                        '<td>'.$freak->name.'</td>'.
                        '<td>'.$freak->phone.'</td>'.
                        '<td>'.$freak->gender.'</td>'.
                        '<td>'.$freak->email.'</td>'.
                        '<td>'.$freak->profile_pic.'</td>'.
                        '</tr>';
                        }
                    return Response($output);
                    }
                 }
            }
            public function searchagencies(Request $request)
            {
                if($request->ajax())
                {
                    $output="";
                    $agencies=DB::table('travel_agencies')
                    ->where('name', 'like', '%'. $request->search.'%')
                    ->orWhere('phone', 'like', '%'. $request->search.'%')
                    ->orWhere('email', 'like', '%'. $request->search.'%')
                    ->get();
                    if($agencies)
                    {
                        foreach ($agencies as $key => $a) {
                        $output.='<tr>'.
                        '<td>'.$a->name.'</td>'.
                        '<td>'.$a->name.'</td>'.
                        '<td>'.$a->phone.'</td>'.
                        '<td>'.$a->gender.'</td>'.
                        '<td>'.$a->email.'</td>'.
                        '<td>'.$a->profile_pic.'</td>'.
                        '</tr>';
                        }
                    return Response($output);
                    }
                 }
            }
    
}
