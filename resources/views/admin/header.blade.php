<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="   /css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 <body class="app sidebar-mini">
  {{csrf_field()}}
    <header class="app-header"><a class="app-header__logo" href="/home"><img src="   /images/logo.png" alt="" height="50px" width="50px"></a>
      <a class="app-sidebar__toggle" href="" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out fa-lg"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <script src="   /js/jquery-3.3.1.min.js"></script>
    <script src="   /js/popper.min.js"></script>
    <script src="   /js/bootstrap.min.js"></script>
    <script src="   /js/main.js"></script>
  </body>
</html>