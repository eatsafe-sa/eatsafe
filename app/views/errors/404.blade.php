@extends('layouts.main')
@include('layouts.nav')
@section('topscript')
<link href="css/cover.css" rel="stylesheet" />
<style type="text/css">
	body {
		  
		  background-image: url('/img/roach.jpg');
		  background-size: cover;
		  color: #000;
		}
	hr {
		color: #000;
		background-color: #000;
		height: 3px;
	}
	.btn-roach {
		background: radial-gradient(#000, #333);
	}

</style>
@stop
@section('content')

<div class="site-wrapper">
	<div class="site-wrapper-inner">
		<div class="cover-container">
			<div class="inner cover">
				<hr>
	<h1 id='missing-head' class='text-center'>This site did not pass inspection.</h1>
	<h2 id="missing-message">
		404: Page Not Found. <i class="fa fa-frown-o"></i>
	</h2>
	<hr>
	<p class="lead">
		<a class="btn btn-lg btn-roach" href="{{ URL::previous() }}">Go Back</a>
	</p>
</div>
</div>
</div>
</div>

@stop

