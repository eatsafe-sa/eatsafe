@extends('layouts.main')

@section('topscript')
	<link rel="stylesheet" href="/css/cover.css" />
@stop

@section('content')
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Eat Safe - SA</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="{{{ action('HomeController@showMap')}}}">Map</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading neon">EAT SAFE<br />&larr;SA&rarr;</h1>
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
