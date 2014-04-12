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
            <p class="lead front-copy">San Antonio area restaurants with real public health inspection data 
              to help you make more informed choices for your San Antonio dining experience.</p>
            <p class="lead">
              <a href="/map" class="btn btn-lg btn-default">Find a Safe Spot to Eat</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;2014 Flamoreyna Productions</p>
            </div>
          </div>

        </div>

      </div>

    </div>
@stop
