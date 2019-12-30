<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="  /css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini">
  {{csrf_field()}}
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/{{session('user')[0]['profile_pic']}}" alt="User Image" height="50px" width="50px" style=" border-radius: 50%;">
        <div>
          <p class="app-sidebar__user-name">{{ session('user')[0]['name'] }}</p>
          <p class="app-sidebar__user-designation">{{ session('user')[0]['email'] }}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{route('admin.index')}}"><i class="app-menu__icon fa fa-tachometer"></i></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.profile')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Profile</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.editprofile')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Edit Profile</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.addadmin')}}"><i class="app-menu__icon fa fa-user-plus"></i><span class="app-menu__label">Add Admin</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.freakslist')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Freaks</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.agencylist')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Agencies</span></a></li> 
        <li><a class="app-menu__item" href="{{route('admin.banedfreaksview')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Banned Freaks</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.banedagenciesview')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Banned Agencies</span></a></li>
        <li><a class="app-menu__item" href="{{route('blogs.index')}}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Blogs</span></a></li>
        <li><a class="app-menu__item" href="{{route('events.index')}}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Events</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.pendingevents')}}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pending Events</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.messages')}}"><i class="app-menu__icon fa fa-inbox"></i><span class="app-menu__label">Message</span></a></li>
        <li><a class="app-menu__item" href="{{route('admin.notifications')}}"><i class="app-menu__icon fa fa-bell"></i><span class="app-menu__label">Notifications</span></a></li>        </li>
      </ul>
    </aside>
    <script src="  /js/jquery-3.3.1.min.js"></script>
    <script src="  /js/popper.min.js"></script>
    <script src="  /js/bootstrap.min.js"></script>
    <script src="  /js/main.js"></script>
  </body>
</html>