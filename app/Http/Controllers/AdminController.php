<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\admin;
use App\user;
use App\freak;
use App\agency;
use App\event;
use App\message;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;
use Validator;
use Auth;
class AdminController extends Controller
{
    public function index(){
        $users = DB::table('users')->count('id'); 
        $messages = DB::table('message')->count('id');
        $freaks = DB::table('freaks')->count('id');
        $agencies = DB::table('travel_agencies')->count('id');
        $events = DB::table('events')->count('id');
        $blogs = DB::table('blogs')->count('id');
        return view('admin.index')
        ->with('users', $users)
        ->with('messages', $messages)
        ->with('agencies', $agencies)
        ->with('events', $events)
        ->with('blogs', $blogs)
        ->with('freaks', $freaks);
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
    function profile(Request $req){
        $admin = DB::table('admins')->where('email', $req->session()->get('user')[0]['email'])
		->get(); 
	
		return view('admin.profile')->with('admin', $admin);
    }
    function freakslist(Request $request){
        $freaks = DB::table('freaks')->where('status', '1')
		->get(); 
		return view('admin.freaks')->with('freaks', $freaks);
    }
    function agencylist(Request $request){
        $agencies = DB::table('travel_agencies')->where('status', '1')
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
    function editprofile(Request $req){
        $admin = DB::table('admins')->where('email', $req->session()->get('user')[0]['email'])
        ->get(); 
    
        return view('admin.edit_profile')->with('admin', $admin);
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
    function confirmdeleteevent($id){
    	event::destroy($id);
    	return redirect()->route('admin.pendingevents');
    }
    
    function banfreaksview($email){
        $user = DB::table('freaks')->where('email', $email)
        ->get(); 
    
        return view('admin.confirmbanfreaks')->with('users', $user);
    }
    function banfreaks(Request $req, $email){
        DB::table('users')
        ->where('email', $email)
        ->update(['status' => '0']);
        DB::table('freaks')
        ->where('email', $email)
        ->update(['status' => '0']);
        return redirect()->route('admin.freakslist');
    }
    
    function deletefreaksview($email){
        $users = DB::table('freaks')->where('email', $email)
        ->get(); 
    
        return view('admin.confirmdeletefreaks')->with('users', $users);
    }
    function banedfreaksview(){
        $freaks = DB::table('freaks')->where('status', '0')
        ->get(); 
    
        return view('admin.banedfreaks')->with('freaks', $freaks);
    }
    function activefreak($email){
        DB::table('users')
        ->where('email', $email)
        ->update(['status' => '1']);
        DB::table('freaks')
        ->where('email', $email)
        ->update(['status' => '1']);
        return redirect()->route('admin.freakslist');
    }
    function banedagenciesview(){
        $freaks = DB::table('travel_agencies')->where('status', '0')
        ->get(); 
    
        return view('admin.banedagencies')->with('freaks', $freaks);
    }
    function activeagencies($email){
        DB::table('users')
        ->where('email', $email)
        ->update(['status' => '1']);
        DB::table('travel_agencies')
        ->where('email', $email)
        ->update(['status' => '1']);
        return redirect()->route('admin.agencylist');
    }
    function deletefreaks($email){
        DB::table('users')->where('email', '=', $email)->delete();
        DB::table('freaks')->where('email', '=', $email)->delete();
        //users::destroy($email);
        return redirect()->route('admin.freakslist');
    }
    function banagenciesview($email){
        $user = DB::table('travel_agencies')->where('email', $email)
        ->get(); 
    
        return view('admin.confirmbanagencies')->with('users', $user);
    }
    function banagencies(Request $req, $email){
        DB::table('users')
        ->where('email', $email)
        ->update(['status' => '0']);
        DB::table('travel_agencies')
        ->where('email', $email)
        ->update(['status' => '0']);
        return redirect()->route('admin.agencylist');
    }
    
    function deleteagenciesview($email){
        $users = DB::table('travel_agencies')->where('email', $email)
        ->get(); 
    
        return view('admin.confirmdeleteagencies')->with('users', $users);
    }
    function deleteagencies($email){
        DB::table('users')->where('email', '=', $email)->delete();
        DB::table('travel_agencies')->where('email', '=', $email)->delete();
        //users::destroy($email);
        return redirect()->route('admin.agencylist');
    }
	function updateprofile(Request $req){
       // dd(Auth::user());
       
        $validation = Validator::make($req->all(), [
            'inputName'=>'required|min:6',
            //'inputPhone'=>'required|max:11|integer',
            'pic'=> 'image|nullable',
        ]);
        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }
        $file=$req->file('pic');
        $file->move('images',$file->getClientOriginalName());
        DB::table('admins')
            ->where('email', $req->session()->get('user')[0]['email'])
            ->update(['profile_pic' => $file->getClientOriginalName() ]);
            DB::table('users')
                ->where('email', $req->session()->get('user')[0]['email'])
                ->update(['profile_pic' => $file->getClientOriginalName() ]);
        //dd($req->file('pic'));
        // if($req->hasFile('pic')){
        //     $file = $req->file('pic');
            
            
        //     DB::table('admins')
        //     ->where('email', session('user.email'))
        //     ->update(['profile_pic' => $req->pic ]);
        //     DB::table('users')
        //     ->where('email', session('user.email'))
        //     ->update(['profile_pic' => $req->pic]);
        
        //     echo $file->getClientOriginalName()."<br>";
        //     echo $file->getClientOriginalExtension()."<br>"
        ;
        //     echo $file->getSize()."<br>";
        //     echo $file->getMimeType();
        //    if($file->move('storage', $file->getClientOriginalName())) {
        //     echo "success";
        //    }
        // }else{
        //     echo "upload fail";
        // }
        //$req->pic->storeAs('storage', $req->pic->getClientOriginalName());
        DB::table('admins')
            ->where('email', $req->session()->get('user')[0]['email'])
            ->update(['name' => $req->inputName , 'phone' => $req->inputPhone ]);
            DB::table('users')
            ->where('email',$req->session()->get('user')[0]['email'])
            ->update(['name' => $req->inputName]);


            $user = user::where('email',$req->session()->get('user')[0]['email'])
                         -> get();

            $req->session()->put('user', $user);
        
        return redirect()->route('admin.profile');
    }
    function changepassword(Request $req){
        $admin = DB::table('admins')->where('email', $req->session()->get('user')[0]['email'])
        ->get(); 
    
        return view('admin.changepassword')->with('admin', $admin);
    }
    function messages(){
        $messages = DB::table('message')
        ->where('reciever','admin@travelers.com')
        ->where('read_status','0')
        ->get(); 
    
        return view('admin.messages')->with('messages', $messages);
    }
    function messagereplyview($id){
        $message = DB::table('message')->where('id', $id)
					->get(); 
                
            return view('admin.messagereply')->with('message', $message);
    }
    function messagereply(Request $req,$email){  
        $todayDate = date("Y-m-d h:m");
        $message = new message();
        $message->sender = "admin@travelers.com";
        $message->reciever =$req->reciever;
        $message->sendername='admin';
        $message->message = $req->reply;
        $message->date=$todayDate;
        $message->read_status = "0";
        if($message->save()){
            return redirect()->route('admin.messages');
            }
            else{
                return redirect()->route('admin.messagereply');
            }
    }
    function markreadmessage(Request $req, $id){
    	$message = message::find($id);
        $message->read_status = '1';
        $message->save();
        
        return redirect()->route('admin.messages');
    }
    function notifications(){
        $notifications = DB::table('notification')
            ->join('events', 'notification.eventid', '=', 'events.id')
            ->select('notification.*', 'events.*')
            ->get();
    
        return view('admin.notifications')->with('notifications', $notifications);
    }
    function insertpassword(Request $req, $email){
        $validation = Validator::make($req->all(), [
            'Password'=>'required|min:4',
            'ConfirmPassword'=>'required|min:4'
        ]);
        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }
        if($req->Password == $req->ConfirmPassword){
            DB::table('admins')
            ->where('email', $req->session()->get('user')[0]['email'])
            ->update(['password' => $req->Password]);
            DB::table('users')
            ->where('email', $req->session()->get('user')[0]['email'])
            ->update(['password' => $req->Password]);
            return redirect()->route('admin.profile');
        }else{
            $admin = DB::table('admins')->where('email', $req->session()->get('user')[0]['email'])
            ->get(); 
        
            return view('admin.changepassword')->with('admin', $admin);
        }
       
    }
    function delete($id){
        $user = DB::table('authors')->where('id', $id)
        ->get(); 
    
        return view('admin.delete')->with('users', $user);
    }
   
    function addadmin(){
        return view('admin.addadmin');
    }
    function insertadmin(Request $req){
            $admin = new admin();
            $admin->name = $req->inputName;
            $admin->email = $req->inputEmail;
            $admin->phone = $req->inputPhone;
            $admin->gender = $req->inputGender;
            $admin->password= $req->inputPassword;
            $admin->profile_pic= 'freaks.png';
            if($admin->save()){
                DB::table('users')->insert(
                    ['name' => $req->inputName, 
                    'email' => $req->inputEmail ,
                    'status' => '1' ,
                    'user_type' => 'admin',
                    'profile_pic' => 'freaks.png',
                    'password' => $req->inputPassword]
                );
                return redirect()->route('admin.index');
                }
                else{
                    return redirect()->route('admin.addadmin');
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
                        '<td>'.$a->agency_name.'</td>'.
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
            public function searchbannedagencies(Request $request)
            {
                if($request->ajax())
                {
                    $output="";
                    $agencies=DB::table('travel_agencies')
                    ->where('status','0')
                    ->Where('name', 'like', '%'. $request->search.'%')
                    ->get();
                    if($agencies)
                    {
                        foreach ($agencies as $key => $a) {
                        $output.='<tr>'.
                        '<td>'.$a->name.'</td>'.
                        '<td>'.$a->agency_name.'</td>'.
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
            public function searchbannedfreaks(Request $request)
            {
                if($request->ajax())
                {
                    $output="";
                    $agencies=DB::table('freaks')
                    ->where('status','0')
                    ->Where('name', 'like', '%'. $request->search.'%')
                    ->get();
                    if($agencies)
                    {
                        foreach ($agencies as $key => $a) {
                        $output.='<tr>'.
                        '<td>'.$a->name.'</td>'.
                        '<td>'.$a->agency_name.'</td>'.
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
            function sendmessageview(){
                return view('admin.sendmessage');
            }
            function sendmessage(Request $req){  
                    $message = new message();
                    $message->sender = "admin@travelers.com";
                    $message->reciever = $req->reciever;
                    $message->message = $req->message;
                    $message->read_status = "0";
                    if($message->save()){
                        return redirect()->route('admin.messages');
                        }
                        else{
                            return redirect()->route('admin.sendmessageview');
                        }
                }
}