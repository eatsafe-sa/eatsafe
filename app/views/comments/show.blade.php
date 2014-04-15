@extends('layouts.main')
@section('topscript')
<style>
  body {
    background-image: url('/img/denim-texture.jpg');
  }
</style>
@stop

@include('layouts.nav')

@section('content')

<div class="container">
	
		<div class="container">
			<div class="col-md-12">
			    <h1>{{{$comment->name}}}</h1>
			    <p>{{{$comment->body}}}</p>
		    <div>
				<span class="badge">{{{$comment->created_at}}}</span><div class="pull-right">
				<span class="label label-danger">Danger</span></div>         
		     </div>
			    <hr>
			</div>
		</div>

</div>

@stop