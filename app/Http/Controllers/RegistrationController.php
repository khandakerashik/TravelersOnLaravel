<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\agency;
use App\freak;
use Illuminate\Support\Facades\DB;
use Validator;

class RegistrationController extends Controller
{
    function index(Request $request){
    	return view('registration.index');
    }

    
    public function freaksreg(){

		return view('registration.freaks');
    }
    
    
    public function agenciesreg(){

		return view('registration.agencies');
    }
    
    function insertfreaks(Request $req){

        $validation = Validator::make($req->all(), [
            'name'=>'required|min:5',
            'email'=>'required|email',
            'phone'=>'required|integer',
            'agencyname' =>'required|min:5',
            'password' =>'required|min:4'
        ]);

        $freak = new freak();
        $freak->name = $req->name;
        $freak->email = $req->email;
        $freak->phone = $req->phone;
        $freak->gender = $req->gender;
        $freak->password= $req->password;
        $freak->profile_pic= 'freaks.png';
        $freak->status= '1';

        if($freak->save()){
            DB::table('users')->insert(
                ['name' => $req->name, 
                'email' => $req->email ,
                'status' => '1' ,
                'type' => 'freaks',
                'profile_pic' => 'freaks.png',
                'password' => $req->password]
            );

            return redirect()->route('login.index');
            }
            else{
                return redirect()->route('registration.freaks');
            }
    }

    function insertagencies(Request $req){

        $validation = Validator::make($req->all(), [
            'name'=>'required|min:5',
            'email'=>'required|email',
            'phone'=>'required|integer',
            'agencyname' =>'required|min:5',
            'password' =>'required|min:4'
        ]);

        $agency = new agency();
        $agency->name = $req->name;
        $agency->agency_name = $req->agencyname;
        $agency->email = $req->email;
        $agency->phone = $req->phone;
        $agency->gender = $req->gender;
        $agency->password= $req->password;
        $agency->profile_pic= 'freaks.png';
        $agency->status= '1';

        if($agency->save()){
            DB::table('users')->insert(
                ['name' => $req->name, 
                'email' => $req->email ,
                'status' => '1' ,
                'type' => 'agencies',
                'profile_pic' => 'freaks.png',
                'password' => $req->password]
            );

            return redirect()->route('login.index');
            }
            else{
                return redirect()->route('registration.agencies');
            }
    }
}
