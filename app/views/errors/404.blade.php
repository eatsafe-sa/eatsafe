@extends('layouts.main')
@include('layouts.nav')
@section('topscript')
<link href="css/cover.css" rel="stylesheet" />
<style type="text/css">
	body {
		  
		  background-image: url('/img/testchef2.jpg');
		  background-size: cover;
		  color: #000;
		}
	hr {
		color: #000;
		background-color: #000;
		height: 3px;
	}

</style>
@stop
@section('content')

<div class="site-wrapper">
	<div class="site-wrapper-inner">
		<div class="cover-container">
			<div class="inner cover">
	<h1 id='missing-head' class='text-center'>This is not the page you're looking for!!</h1>
	<h2 id="missing-message">
		404: page not found!! :(
	</h2>
	<hr>
	<p class="lead">
		<a class="btn btn-lg btn-primary" href="{{ URL::previous() }}">Go Back</a>
	</p>
</div>
</div>
</div>
</div>

@stop

