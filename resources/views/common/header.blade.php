<!DOCTsYPE html>
<head>
    <link href="/css/header.css" rel="stylesheet">
</head>
<body> 
  <header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ route('home.index') }}"><img src="/images/logo.png" alt="" height="110px" width="110px"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('blogs.index') }}">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('events.index') }}">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('login.index') }}">Sign In</a></li>
        </ul>
      </div>
    </nav>
  </header>
</body>
</html>