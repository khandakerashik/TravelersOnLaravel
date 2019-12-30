<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function index(){

    	$eventCount=event::where('status',1)
    			   ->count();

    	$event=event::where('status',1)
    				->get();


		return view('events.index')->with('count',$eventCount)
								  ->with('event',$event);


 }

	public function event_details($id){


		$event=event::where('id',$id)
					->get();

		return view('events.event_details')->with('event',$event);

	}

	public function book_now($id){

		$event=event::where('id',$id)
					->get();
		return view('events.book_now')->with('event',$event);
	}



	public function bookEvent($id,Request $req){

		$event=event::where('id',$id)
					->get();

		
		$todayDate = date("Y-m-d");
		$cost=$req->inputPerson * $event[0]['cost_per_person'];

			DB::table('booking')->insert(
			    ['eventid' =>$id, 
			     'eventtitle'=>$event[0]['title'],
			     'agencyname'=>$event[0]['agencyname'],
			     'angencies_email'=>$event[0]['postby'],
			     'bookedby'=>$req->session()->get('user')[0]['email'],
			     'bookedby_name'=>$req->session()->get('user')[0]['name'],
			     'date'=>$todayDate,
			     'booking_count'=>$req->inputPerson,
			     'cost'=>$cost
			     ]);



		$updateCapacity = $event[0]['person_capacity'] - $req->inputPerson;
		$e = event::find($id);
		$e->person_capacity = $updateCapacity;
		
		if($e->save()){


            return redirect()->route('events.book_now',$id);

        }else{
            return redirect()->route('events.book_now',$id);
                                                    
        }



	}


	public function CancelEvent($id,$eid,Request $req){



	   $e = DB::table('events')->where('id',$eid)->get();
	   $b = DB::table('booking')->where('id',$id)->get();
	  
	   $event = event::find($eid);
	  
	   $event->person_capacity=$e[0]->person_capacity + $b[0]->booking_count ;

		

        
        if($event->save()){

        	DB::table('booking')->where('id',$id)->delete();

            return redirect()->route('freaks.book_events');
        }else{
            return redirect()->route('freaks.book_events');
                                                    
        }






	}



	
}
