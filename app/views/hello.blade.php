@extends('layouts.main')

@section('topscript')
	<link rel="stylesheet" href="/css/cover.css" />
@stop

@include('layouts.nav')
@section('content')
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
            <h1 class="cover-heading neon" id="coverPage">EAT SAFE<br /><i class="fa fa-cutlery"></i>
               &nbsp;SA &nbsp;<i class="fa fa-cutlery"></i></h1>
            <p class="lead">Here is some text about how cool the app is.  We don't go into great depth about this.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Click for Stuff</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Footer stuff goes here</p>
            </div>
          </div>

        </div>

      </div>

    </div>
@stop
