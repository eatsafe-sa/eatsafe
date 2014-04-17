@extends('layouts.main')
@section('topscript')
<style>
  body {
    background-image: url('/img/denim-texture.jpg');
    color: #222;
  }
</style>
@stop

@include('layouts.nav')

@section('content')
	<div class="container">
		<div class="well col-sm-8">
			<h2 class="text-center">Edit User Information</h2>
			<p>All fields are required</p>
			{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT')) }}
			{{ $errors->first('email', '<h3>Must Have an E-mail.</h3>')}}
						<div class="col-sm-12">
							
							{{ Form::text('email', $value = null, $attributes = array (
								'placeholder' => 'E-mail *',
								'class' => 'requiredField form-control'
							))}}
						</div>
						
						<div class="col-sm-12">
					    {{ $errors->first('password', '<h3>Must Have a Password.</h3>')}}
					    {{ Form::password('password', array (
							'placeholder' => 'Password *',
							'class' => 'requiredField form-control'
					    ))}}
						</div>
						{{ Form::checkbox('is_admin', true)}}
					<input type="submit" class="btn btn-lg btn-success" name="submit" value="Edit User">
				{{Form::close()}}
				

		</div>
	</div>
@stop

@section('bottomscript')
@stop
