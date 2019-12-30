<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

class LoginController extends Controller
{
    public function index(){


		return view('login.index');
	}


public function verify(Request $req){

		

		$user = user::where('email', $req->email)
					->where('password', $req->password)
					->where('status',1)
					-> get();
				

		if(count($user) > 0 ){
	
			
			
			$req->session()->put('user', $user);
			
			if($user[0]['user_type'] == 'admin' ){
				$req->session()->put('admin',$user[0]['user_type']);
				return redirect()->route('admin.index');
			}
			else{
				$req->session()->put('loginuser',$user[0]['user_type']);
				return redirect()->route('home.index');
			}

			
		}else{

			$req->session()->flash('msg', 'invalid username/password');

			return redirect('/login');
		}
	}




}
