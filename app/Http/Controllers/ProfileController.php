<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    

    public function index(Request $req){


       if($req->session()->get('user')[0]['user_type'] == 'freaks'){
            
           return redirect()->route('freaks.index');
       
        }

       elseif ($req->session()->get('user')[0]['user_type'] == 'agencies') {

       		return redirect()->route('travel_agency.index');
       }
       else{

       		return redirect()->route('home.index');
       }


       
        
    	
		
	}


}
