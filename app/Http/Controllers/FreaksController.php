<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\blog;
use App\freak;
use App\comment;
use PDF;
use Illuminate\Support\Facades\DB;

class FreaksController extends Controller
{


	public $email;

    public function index(Request $req){

    	$freak=freak::where('email',$req->session()->get('user')[0]['email'])
    				  ->get();

    	$req->session()->put('freak',$freak);

		return view('freaks.index');
	}

	public function edit_profile(){

		return view('freaks.edit_profile');
	}



	public function updateProfile(Request $req){


		//image 

		if($req->hasfile('inputImage')){
			$file=$req->file('inputImage');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}
		else
		{
			$path =$req->session()->get('freak')[0]['profile_pic'];

		}

		

		//update both database
		$user = user::find($req->session()->get('user')[0]['id']);
		
        $user->name = $req->inputName;
        $user->password = $req->inputPassword;
        $freak = freak::find($req->session()->get('freak')[0]['id']);
      
        $freak->name = $req->inputName;
        $freak->password = $req->inputPassword;
        $freak->phone = $req->inputPhone;
        $freak->profile_pic=$path;


        
        if($user->save() && $freak->save()){

        	$user = user::where('email',$req->session()->get('user')[0]['email'])
        				->get();
        	$req->session()->put('user', $user);

            return redirect()->route('freaks.index');
        }else{
            return redirect()->route('freaks.edit_profile');
                                                    
        }
		
	}



	public function write_blog(){

		return view('freaks.write_blog');
	}


	public function insertBlog(Request $req){


		if($req->hasfile('inputImage')){
			$file=$req->file('inputImage');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}

		$todayDate = date("Y-m-d");


		$blog= new blog();
		$blog->title=$req->inputTittle;
		$blog->location=$req->inputLocation;
		$blog->description=$req->description;
		$blog->date=$todayDate;
		$blog->image=$path;
		$blog->postby=$req->session()->get('user')[0]['email'];
		$blog->name=$req->session()->get('user')[0]['name'];
		$blog->catagory='blog';
		$blog->status='1';

		if($blog->save()){
            return redirect()->route('blogs.index');
        }else{
            return redirect()->route('freaks.write_blog')
                                       ->withInput();                   
        }

	
	
	}


	public function edit($id){


		$blog = blog::where('id',$id)
					  -> get();


		return view('freaks.edit')->with('blog',$blog);
	}


	public function updateBlog($id,Request $req)

	{	

		//image 

		if($req->hasfile('inputImage')){
			$file=$req->file('inputImage');
			$filename= $file->getClientOriginalName();
			$path = $file->storeAs('images',$filename);
			$file->move('images', $file->getClientOriginalName());
		}
		else
		{
			$blogImage = blog::where('id',$id)
					     -> get();

			
			$path =$blogImage[0]['image'];

		}


		$blog = blog::find($id);
		$blog->title=$req->inputTittle;
		$blog->location=$req->inputLocation;
		$blog->description=$req->description;
		$blog->image=$path;


		if($blog->save()){

            return redirect()->route('freaks.edit_blog');
        }else{
            return redirect()->route('freaks.edit');
                                                    
        }


	}



	public function edit_blog(Request $req){


		$blog = blog::where('postby',$req->session()->get('user')[0]['email'])
					  ->where('status',1)
					  -> get();


		return view('freaks.edit_blog');
	}

	public function delete_blog($id){
		
		

		$blog = blog::find($id);

		
		$blog->status='0';

        
        if($blog->save()){

            return redirect()->route('freaks.edit_blog');
        }else{
            return redirect()->route('freaks.edit_blog');
                                                    
        }

	}

	public function trash(Request $req){


		$blog = blog::where('postby',$req->session()->get('user')[0]['email'])
					  ->where('status',0)
					  -> get();
		return view('freaks.trash')->with('blog',$blog);
	}


	public function restore(Request $req,$id){


		$blog = blog::find($id);

		
		$blog->status='1';

        
        if($blog->save()){

            return redirect()->route('freaks.trash');
        }else{
            return redirect()->route('freaks.trash');
                                                    
        }
	
	}



	public function book_events(Request $req){

		$booking = DB::table('booking')->where('bookedby', $req->session()->get('user')[0]['email'])->get();
		return view('freaks.book_events')->with('booking',$booking);
	}

	public function history(Request $req){

		$booking = DB::table('booking')->where('bookedby', $req->session()->get('user')[0]['email'])->get();
		
		$notification= DB::table('notification')->where('postby', $req->session()->get('user')[0]['email'])->get();


		$comment=comment::where('postby',$req->session()->get('user')[0]['email'])
		 				 ->get();


		return view('freaks.history')->with('comment',$comment)
									 ->with('booking',$booking)
									 ->with('notification',$notification);

	}

	public function messages(Request $req){


		$user = user::where('email','!=',$req->session()->get('user')[0]['email'])
        				->get();
        

		$message = DB::table('message')->where('reciever',$req->session()->get('user')[0]['email'])->get();

		//dd($message);

		return view('freaks.messages')->with('message',$message)
									  ->with('user',$user);
	}



	public function messagesSent($id,Request $req){

		return view('freaks.sendMessage');

	}

	public function messagesStore($id,Request $req){
		$user = user::where('id',$id)
        				->get();
        
        $todayDate = date("Y-m-d h:m");
		
			DB::table('message')->insert(
			    ['sender' =>$req->session()->get('user')[0]['email'], 
			     'sendername'=>$req->session()->get('user')[0]['name'],
			     'reciever'=>$user[0]['email'],
			     'message'=>$req->message,
			     'date'=>$todayDate,
			     'read_status'=>'0'		
			     ]);

		
			return redirect()->route('freaks.messages');

	}



	public function notifications(Request $req){

		
		$comment=comment::where('blogpostemail',$req->session()->get('user')[0]['email'])
		 				 ->get();


		return view('freaks.notifications')->with('comment',$comment);
	}

	public function analytics(Request $req){

		
		$commentCount = DB::table('comments')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->count();

		$postCount = DB::table('blogs')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->count();

		$deleteCount = DB::table('blogs')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->where('status',0)
				 ->count();
		$ReportCount = DB::table('notification')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->count();
		$cost=DB::select('select sum(cost) AS cost from booking where bookedby = ?', [$req->session()->get('user')[0]['email']]);

		//dd($deleteCount);


		return view('freaks.analytics')->with('c',$commentCount)
									   ->with('p',$postCount)
									   ->with('d',$deleteCount)
									   ->with('r',$ReportCount)
									   ->with('cost',$cost[0]->cost);
	}





	public function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('blogs')
         ->where('title', 'like', '%'.$query.'%')
         ->orWhere('location', 'like', '%'.$query.'%')
         ->orWhere('date', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->where('postby',$request->session()->get('user')[0]['email'])
         ->where('status',1)
         ->get();
         
      }
      else
      {
       $data = DB::table('blogs')
         ->where('postby',$request->session()->get('user')[0]['email'])
         ->where('status',1)
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->title.'</td>
         <td>'.$row->location.'</td>
         <td>'.$row->date.'</td>
         <td><img  src="/'.$row->image.'" height="65px" width="100px"></td>
         <td>
    		<a href="/freaks/edit/'.$row->id.'"> <button class="btn btn-lg btn-dark" type="submit">Edit</button></a>
         </td>
         <td>
          <a href="/freaks/delete_blog/'.$row->id.'"> <button class="btn btn-lg btn-danger" type="submit" >Delete</button></a>
         </td>

        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }


    public function settings(Request $req){

		return view('freaks.settings');

	}
	
	public function settingsSave(Request $req){



		$freak = freak::find($req->session()->get('freak')[0]['id']);
      
        $freak->layout = $req->theme;
        
        if($freak->save()){

            return redirect()->route('freaks.index');
        }else{
            return redirect()->route('freaks.settings');
                                                    
        }
		
	}


	public function pdf(Request $req)
    {

     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_Report_data_to_html($req));
     return $pdf->stream();
    
    }

   



    public function convert_Report_data_to_html($req)
    {
     	

     $commentCount = DB::table('comments')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->count();

		$postCount = DB::table('blogs')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->count();

		$deleteCount = DB::table('blogs')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->where('status',0)
				 ->count();
		$ReportCount = DB::table('notification')
				 ->where('postby',$req->session()->get('user')[0]['email'])
				 ->count();
		$cost=DB::select('select sum(cost) AS cost from booking where bookedby = ?', [$req->session()->get('user')[0]['email']]);



	     $output = '
	     <h3 align="center">Analysis Report</h3>
	     <table width="100%" style="border-collapse: collapse; border: 0px;">
	    <tr>
		    <th style="border: 1px solid; padding:12px;" width="20%">Total Posted Blog</th>
		    <th style="border: 1px solid; padding:12px;" width="30%">Total Comment</th>
		    <th style="border: 1px solid; padding:12px;" width="15%">Total Delete Blog</th>
		    <th style="border: 1px solid; padding:12px;" width="15%">Total Report to Admin</th>
		    <th style="border: 1px solid; padding:12px;" width="20%">Total Cost</th>
	   </tr>
	     ';  
	     
	      $output .= '
	      <tr>
		       <td style="border: 1px solid; padding:12px;">'.$commentCount.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$postCount.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$deleteCount.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$ReportCount.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$cost[0]->cost.'</td>
	      </tr>
	      ';
	     
	     $output .= '</table>';
	     return $output;
   

    }





}
