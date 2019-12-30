@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        @foreach($users as $u)
        <div>
          <h1>Messages to {{$u->name }}</h1>
        </div>
        
      </div>

      
      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="card card-signin" style=" width: 500px">
            <div class="card-body ">
              <p name="name"><h3>{{$u->name }}</h3>
                <hr>
@endforeach



          @foreach($mes as $me)
          

              <div class="card1 float-left w-100 card-signin my-3">
                <div class="card-body1 ">
                  <p><b>{{ $me->sendername }}:</b> {{ $me->messsage }}</p>
                  <p class="float-right"><small>{{ $me->date }}</small></p>

                </div>
              </div>

              @endforeach
              


          @foreach($messages as $m)

              <div class="card1 float-left w-100 card-signin my-3">
                <div class="card-body1 ">
                  <p><b>{{ $m->sendername }}:</b> {{ $m->message }}</p>
                  <p class="float-right"><small>{{ $m->date }}</small></p>

                </div>
              </div>

              @endforeach



              <form method="post" enctype="multipart/form-data">
              {{csrf_field()}}

                <input type="text" name="message" class="form-control" placeholder="Write a message" value="" style=" height: 50px">
                <br>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <button class="btn btn-info btn-lg" type="submit">Send</button>
              </form>










            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Messages
@endsection