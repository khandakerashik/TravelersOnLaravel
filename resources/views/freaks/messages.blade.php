@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Message</h1>
        </div>
      </div>

   
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                   
                <table class="table table-hover " id="sampleTable">
                      
                  <strong> INBOX</strong> </br>  </br> 
            @foreach($message as $m)

              <div class="alert alert-info">
                <strong><a href="">"{{$m->sendername}}" </a> </strong>&nbsp  sent you:&nbsp;  <strong>{{$m->message}}</strong>    
           &nbsp; &nbsp;  &nbsp; at &nbsp; {{$m->date}}
            </div>
            @endforeach
     
               </br>  </br>            
                <thead class="thead-dark"> 
            
                    <tr>
                      <th>Send Message To</th>
                      <th> user type </th>
                      <th>&nbsp&nbsp&nbspSend Message</th>
                    </tr>
                  </thead>
                          
    
                   
                 @foreach($user as $u)
                      
                  <tbody>     
                       
                      <tr>
                     
                      <td>{{$u->name}}</td>
                      <td>{{$u->user_type}}</td>
                      
                         <td>
                        <a href="{{route('freaks.messages.sent',$u->id)}}"> <button class="btn btn-info" type="submit" value="submit">send message </button> </a>
                       </td>
                                          
                          
                     
                        
                    </tr>
                      
                  </tbody>
                @endforeach
                    
                </table> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Messages
@endsection