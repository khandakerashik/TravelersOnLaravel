<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\user;
use App\admins;
use App\freaks;
use App\event;
use App\message;
use App\declined_events;
use App\travel_agencie;
use App\booking;
use Validator;


class TravelAgencyController extends Controller
{
    
    function index(Request $req){

		$agency = travel_agencie::where('email', session('user')[0]['email'])
									->get(); 

		$req->session()->put('travel_agencies',$agency);
	
		return view('travel_agency.index')->with('agency', $agency);

	}

	public function edit_profile(){

		$agency = travel_agencie::where('email', session('user')[0]['email'])
									->get(); 
									
		return view('travel_agency.edit_profile')->with('agency', $agency);
	}

	public function update_profile(Request $req){

		if($req->hasfile('image')){

			$file=$req->file('image');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}
		else
		{
			$path =$req->session()->get('travel_agencies')[0]['profile_pic'];
		}

        $travel_agencies =travel_agencie::find($req->session()->get('travel_agencies')[0]['id']);
        $travel_agencies->name = $req->name;
        $travel_agencies->agency_name = $req->agencyname;
        $travel_agencies->email = $req->session()->get('user')[0]['email'];
        $travel_agencies->phone = $req->phone;
        $travel_agencies->password = $req->password;
        $travel_agencies->profile_pic = $path;

        $users = user::find($req->session()->get('user')[0]['id']);
        $users->name = $req->name;
        $users->email = $req->session()->get('user')[0]['email'];
        $users->password = $req->password;
        $users->user_type ='agencies';
        $users->status ='1';

        if($users->save() && $travel_agencies->save()){

        	$users = user::where('email',$req->session()->get('user')[0]['email'])
        				->get();

        	$req->session()->put('user', $users);
        	
            return redirect()->route('travel_agency.index');

        }else{

            return redirect()->route('travel_agency.edit_profile');                   
        }
		
	}

	public function offer_events(){

		$agency = travel_agencie::where('email', session('user')[0]['email'])
									->get();

		return view('travel_agency.offer_events')->with('agency', $agency);
	}

	public function insert_events(Request $req){

        if($req->hasfile('image')){
			
			$file=$req->file('image');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}
		

        $events = new event();
        $events->title = $req->tittle;
        $events->postby = $req->session()->get('user')[0]['email'];
        $events->agencyname = $req->agencyname;
        $events->place = $req->place;
        $events->date = $req->date;
		$events->duration = $req->duration;
		$events->description = $req->description;
		$events->person_capacity = $req->person;
		$events->cost_per_person = $req->cost;
		$events->image = $path;
		$events->catagory = 'events';
		$events->status = '0';
        
        if($events->save()){

            return redirect()->route('travel_agency.edit_events');
        } 
        else{
            return redirect()->route('travel_agency.offer_events');
        }
        
    }

	public function edit_events(){

		$event=event::where('postby', session('user')[0]['email'])
					   ->where('status','1')
					   ->orderby('id','desc')
					   ->get();

		return view('travel_agency.edit_events')->with('events',$event);
	}

	public function edit($id){

		$event=event::where('postby', session('user')[0]['email'])
					->where('id',$id)
					->get();
		
		return view('travel_agency.edit')->with('events',$event);
	}

	public function update_events(Request $req, $id){

        if($req->hasfile('image')){
			$file=$req->file('image');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}
		else
		{
			$eventimages = event::where('id',$id)
					     -> get();

			
			$path =$eventimages[0]['image'];

		}

        $events = event::find($id);
        $events->title = $req->tittle;
        $events->postby = $req->session()->get('user')[0]['email'];
        $events->agencyname = $req->agencyname;
        $events->place = $req->place;
        $events->date = $req->date;
		$events->duration = $req->duration;
		$events->description = $req->description;
		$events->person_capacity = $req->person;
		$events->cost_per_person = $req->cost;
		$events->image = $path;
		$events->catagory = 'events';
		$events->status = '1';
        
        if($events->save()){

            return redirect()->route('travel_agency.edit_events');
        } 
        else{
            return redirect()->route('travel_agency.edit');
        }
        
    }

	public function delete_events(){

		$event=event::where('postby', session('user')[0]['email'])
					   ->where('status','1')
					   ->get();

		return view('travel_agency.delete_events')->with('events',$event);
	}

	public function delete($id){

		$event=event::where('postby', session('user')[0]['email'])
					->where('id',$id)
					->get();
		
		return view('travel_agency.delete')->with('events',$event);
	}

	public function destroy(Request $req, $id){

		$events = event::find($id);

		$event=event::where('id',$id)
					->get();

		$declined_events = new declined_events();
        $declined_events->tittle = $event[0]['title'];
        $declined_events->postby = $req->session()->get('user')[0]['email'];
        $declined_events->agencyname = $event[0]['agencyname'];
        $declined_events->place = $event[0]['place'];
        $declined_events->date = $event[0]['date'];
		$declined_events->duration = $event[0]['duration'];
		$declined_events->description = $event[0]['description'];
		$declined_events->person_capacity = $event[0]['person_capacity'];
		$declined_events->cost_per_person = $event[0]['cost_per_person'];
		$declined_events->image = $event[0]['image'];
		$declined_events->catagory = 'events';
		$declined_events->status = '0';
		$declined_events->save();

		event::destroy($id);

		return redirect()->route('travel_agency.delete_events');
	}

	public function history(){

		$allevent=event::where('postby', session('user')[0]['email'])
					   ->where('status','1')
					   ->get();

		$declined_events=declined_events::all();

		return view('travel_agency.history')->with('events',$allevent)->with('event',$declined_events);
	}

	public function booked_events(){

		$booking =booking::where('angencies_email', session('user')[0]['email'])
					   ->get();

		return view('travel_agency.booked_events')->with('booking',$booking);
	}

	public function messages(Request $req){

		$users = user::where('email','!=',$req->session()->get('user')[0]['email'])
						->get();

		$messages = message::where('sender',$req->session()->get('user')[0]['email'])
						->get();

		return view('travel_agency.messages')->with('users',$users)->with('messages',$messages);
	}

	public function messagetoanyone(Request $req,$email){

		$users = user::where('email',$email)
						->where('email','!=',$req->session()->get('user')[0]['email'])
						->get();

		$messages = message::where('sender',$req->session()->get('user')[0]['email'])
							->where('reciever', $email)
							->orderBy('date','asc')
							->get();

		$mes = message::where('sender',$email)
						->where('reciever', $req->session()->get('users')[0]['email'])
						->orderBy('date','asc')
						->get();

					
		return view('travel_agency.messagetoanyone')->with('users',$users)->with('messages',$messages)->with('mes',$mes);
	}

	public function messagestore(Request $req,$email){

		$users = user::where('email',$email)
						->get();
        
        $todayDate = date("Y-m-d h:m:s");

		$messages = new message();
		$messages->sender = $req->session()->get('user')[0]['email'];
		$messages->sendername = $req->session()->get('user')[0]['name'];
		$messages->reciever = $users[0]['email'];
		$messages->message = $req->message;
		$messages->date = $todayDate;
		$messages->read_status = '0';
		$messages->save();

		return redirect()->route('travel_agency.messagetoanyone',$email);

	}

	public function notifications(){

		$allevent=event::all()->where('status','1');

		$declined_events=declined_events::all();

		return view('travel_agency.notifications')->with('events',$allevent)->with('event',$declined_events);
	}

	public function dashboard(){

		$allevent=event::all()->where('status','1');

		return view('travel_agency.dashboard')->with('events',$allevent);
	}



}
