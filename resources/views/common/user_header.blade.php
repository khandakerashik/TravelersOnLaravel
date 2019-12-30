<!DOCTYPE html>
  <head>
      <link href="/css/header.css" rel="stylesheet">
  </head>
  <body> 
    <header class="main_menu_area">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home"><img src="/abc/images/logo.png" alt="" height="110px" width="110px"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('blogs.index') }}">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('events.index') }}">Events</a></li>
            <li class="nav-item dropdown submenu">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ session('user')[0]['name'] }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  </body>
</html>