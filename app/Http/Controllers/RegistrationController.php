<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\author;
use Illuminate\Support\Facades\DB;
use Validator;

class RegistrationController extends Controller
{
    function index(Request $request){
    	return view('registration.index');
    }

    function insert(Request $req){

        $validation = Validator::make($req->all(), [
            'username'=>'required',
            'name'=>'required',
            'contact'=>'required',
            'password'=>'required|min:4',
            'email'=>'required|email'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }


            $user = new users();
            $user->username = $req->username;
            $user->password = $req->password;
            $user->contact = $req->contact;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->type= $user->name = $req->type;;
            if($user->save()){
                return redirect()->route('admin.index');
                }
                else{
                    return redirect()->route('registration.index');
                }
    }
}
