<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-cutlery"></i> &nbsp;Eat Safe San Antonio &nbsp;<i class="fa fa-cutlery"></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ action('HomeController@showMap')}}">The Map</a></li>
        <li><a href="{{ action('HomeController@showTeam')}}">The Team</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Admins <i class="fa fa-arrow-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="{{ action('HomeController@showLogin')}}">Login</a></li>
            <li><a href="#">Contact Us</a></li>
            <li class="divider"></li>
            @if(!Auth::check())
            <li><a href="#">Logout</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>