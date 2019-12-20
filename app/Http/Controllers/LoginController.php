<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\users;

class LoginController extends Controller 
{
	public function index(){

		return view('login.index');
	}

	public function verify(Request $req){

		//$users = User::all();

		$user = users::where('email', $req->email)
					->where('password', $req->password)
					->where('status', '1')
					-> first();

		// $user = DB::table('users')->where('username', $req->username)
		// 			->where('password', $req->password)
		// 			->get();				

		if($user != null){
	
			$req->session()->put('email', $req->input('email'));
			$req->session()->put('name', $user ->name) ;
			$req->session()->put('id', $req->input('id'));
			$req->session()->put('password', $req->input('password'));
			$req->session()->put('profile_pic', $user ->profile_pic);
			$req->session()->put('user', $user);

			// $pic = DB::table('users')
            // ->join('admins', 'users.email', '=', 'admins.email')
            // ->select('users.*', 'admins.profile_pic')
			// ->get();
			// $req->session()->put('pic', $pic->profile_pic);


			$type = $req->session()->get('user');

			if($type->type == 'admin' ){
				return redirect()->route('admin.index');
			}

			else if($type->type == 'freaks' ){
				return redirect()->route('freaks.index');
			}

			else{
				return redirect()->route('agencies.index');
			}
			
		}else{

			$req->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect('/login');
		}
	}

}
