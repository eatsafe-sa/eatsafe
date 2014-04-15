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
            <p class="lead front-copy">Searchable map of the San Antonio area, providing actual city health inspection data to help you make more informed choices for your dining experience.</p>
            <p class="lead">
              <a href="/map" class="btn btn-lg btn-default">Find a Safe Spot to Eat</a>
            </p>
          </div>
          @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
          @endif
          @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
          @endif

          <div class="mastfoot">
            <div class="inner">
              <p><span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;2014 Flamoreyna Productions</p>
            </div>
          </div>

        </div>

      </div>

    </div>
@stop
