@extends('freaks.layout')
  @section('content')
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Settings</h1>
        </div>
      </div>
      <form method="post">
        @csrf
                <div class="form-label-group my-4">
                <div class="form-group">
                  <h3>&nbspTheme</h1>
                  <select class="form-control" id="theme" value="" name="theme" required>
                    <option value="/css/freaks.css">Choose your Theme</option>
                    <option value="/css/freaks.css">Standard</option>
                    <option value="/css/freaks1.css">Theme 1</option>
                    <option value="/css/freaks2.css">Theme 2</option>
                  </select>
                </div>
                <span name="Choose your Theme"></span>
              </div>
    
      &nbsp&nbsp<button class="btn btn-dark" type="submit">Save</button>

      </form>

@endsection

@section('title')
Settings
@endsection