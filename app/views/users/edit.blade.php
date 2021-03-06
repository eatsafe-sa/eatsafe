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
			{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'role' => 'form', 'class' => 'form')) }}
			{{ $errors->first('email', '<h3>Must Have an E-mail.</h3>')}}
						<div class="col-sm-12 form-group">
							
							{{ Form::text('email', $value = null, $attributes = array (
								'placeholder' => 'E-mail *',
								'class' => 'form-control',
								'autofocus' => 'autofocus'
							))}}
						</div>
						
						<div class="col-sm-12 form-group">
					    {{ $errors->first('password', '<h3>Must Have a Password.</h3>')}}
					    {{ Form::password('password', array (
							'placeholder' => 'Password *',
							'class' => 'form-control'
					    ))}}
						</div>
						<div class="form-group">
						<label>
						{{ Form::checkbox('is_admin', true)}} Add Admin Permissions
						</label>
						</div>
					<input type="submit" class="btn btn-lg btn-success" name="submit" value="Edit User">
				{{Form::close()}}

				@if (Auth::check() && Auth::user()->is_admin)
						{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
						{{ Form::close() }}
								<a href="#" id="btnDeletePost" class="btn btn-lg btn-danger">Delete User</a>
								
				@endif
				

		</div>
	</div>
@stop

@section('bottomscript')
<script>

$('#btnDeletePost').on('click', function(e) {
	e.preventDefault();
	if(confirm('Are you sure you want to delete this user?')) {
		$('#formDeletePost').submit();
	}
});

</script>
@stop
