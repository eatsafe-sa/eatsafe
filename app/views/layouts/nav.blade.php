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
      <a class="navbar-brand" href="/"><i class="fa fa-cutlery"></i> &nbsp;Eat Safe San Antonio &nbsp;<i class="fa fa-cutlery"></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ action('HomeController@showMap')}}"><i class="fa fa-map-marker"></i> The Map</a></li>
        <li><a href="{{ action('HomeController@showTeam')}}"><i class="fa fa-users"></i> The Team</a></li>
        <li><a href="{{ action('CommentController@create')}}"><i class="fa fa-comments"></i> Feedback</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Admins <i class="fa fa-arrow-down"></i></a>
          <ul class="dropdown-menu">
            @if(!Auth::check())
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
            <li><a href="{{ action('CommentController@create')}}">Contact Us</a></li>
            @endif
            <li class="divider"></li>
            @if(Auth::check())
            <li><a href="{{ action('CommentController@index')}}">View Feedback</a></li>
            @endif
            @if(Auth::check() && Auth::user()->is_admin)
            <li><a href="{{ action('UsersController@index') }}">View &amp; Edit Users</a></li>
            @endif
            @if(Auth::check())
            <li><a href="{{ action('HomeController@logout')}}">Logout</a></li>
            @endif
          </ul>
        </li>
        @if(Auth::check())
          <li><p class="navbar-text navbar-right">Signed in as {{ Auth::user()->email }} &nbsp;</p></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h1 class="text-center">Login</h1>
    </div>

    <div class="modal-body">
      {{ Form::open(array('method' => 'post', 'action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
      <h2 class="form-signin-heading">Admin Login</h2>
      {{ Form::text('email', $value = null, $attributes = array ('placeholder' => 'E-Mail Address','class' => 'requiredField form-control','autofocus' => 'autofocus'))}}
      {{ Form::password('password', array ('placeholder' => 'Password','class' => 'requiredField form-control'))}}
      <label class="checkbox">
        {{ Form::checkbox('remember-me', 0, null)}}Remember Me
      </label>
      <hr>
      <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
    {{ Form::close() }}
    </div>
   <div class="modal-footer">
     <div class="col-md-12">
       <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
     </div>    
   </div>
 </div>
</div>
</div>

   



