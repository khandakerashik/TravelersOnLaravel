@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Send Message</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post"   enctype="multipart/form-data">

                @csrf
                <strong>Write Message</strong>
                <div class="form-label-group my-4">
                  <textarea class="form-control1" id="message" name="message" placeholder="Message" required></textarea>
                  <label for="message"></label>
                </div>

                

                <button class="btn btn-lg btn-block my-4" type="submit">Sent it</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
 @endsection

@section('title')
Send Message
@endsection