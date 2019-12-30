@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Messages</h1>
        </div>
      </div>

       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <p><b>Freaks List</b></p>
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
                    </tr>
                  </thead>

                  @foreach($users as $u)

                  <tbody>
                    <tr>
                      <td>{{$u->name }}</td>
                      <td>{{$u->email }}</td>
                      <td>{{$u->user_type }}</td>
                      <td>
                        <a href="{{route('travel_agency.messagetoanyone', $u->email)}}"> <button class="btn btn-info btn-lg btn-block" type="submit">Send Message</button></a>
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