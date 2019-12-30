<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/travel_agency.css">
    <link rel="stylesheet" type="text/css" href="/css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 <body class="app sidebar-mini">
    <header class="app-header"><a class="app-header__logo" href="{{ route('home.index') }}"><img src="/images/logo.png" alt="" height="60px" width="60px"></a>
      <a class="app-sidebar__toggle" href="" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/{{ session('travel_agencies')[0]['profile_pic'] }}" alt="User Image" height="50px" width="50px" style=" border-radius: 50%;">
        <div>
          <p class="app-sidebar__user-name">{{ session('user')[0]['name'] }}</p>
          <p class="app-sidebar__user-designation">{{ session('user')[0]['user_type'] }}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{ Route::is('travel_agency.dashboard') ? 'active' : '' }}" href="{{ route('travel_agency.dashboard') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.index') ? 'active' : '' }}" href="{{ route('travel_agency.index') }}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Profile</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.edit_profile') ? 'active' : '' }}" href="{{ route('travel_agency.edit_profile') }}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Edit Profile</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.offer_events') ? 'active' : '' }}" href="{{ route('travel_agency.offer_events') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Offer Events</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.edit_events') ? 'active' : '' }}" href="{{ route('travel_agency.edit_events') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Edit Events</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.delete_events') ? 'active' : '' }}" href="{{ route('travel_agency.delete_events') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Delete Events</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.history') ? 'active' : '' }}" href="{{ route('travel_agency.history') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">History</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.booked_events') ? 'active' : '' }}" href="{{ route('travel_agency.booked_events') }}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Booked Events</span></a></li>

        <li><a class="app-menu__item {{ Route::is('travel_agency.messages') ? 'active' : '' }}" href="{{ route('travel_agency.messages') }}"><i class="app-menu__icon fa fa-inbox"></i><span class="app-menu__label">Messages</span></a></li>
        
        <li><a class="app-menu__item {{ Route::is('travel_agency.notifications') ? 'active' : '' }}" href="{{ route('travel_agency.notifications') }}"><i class="app-menu__icon fa fa-bell"></i><span class="app-menu__label">Notifications</span></a></li>
      </ul>
    </aside>


    @yield('content')

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/canvasjs.min.js"></script>
  </body>
</html>