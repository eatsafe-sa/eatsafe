@extends('layouts.main')

@include('layouts.nav')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h3 class="col-title"> Leave Us Feedback! </h3>
				<p> Name and Body fields are required.  Using an E-Mail address is optional, but necessary if you want us to get back to you with a response.</p>

				{{ Form::model(new Comment(), array('action' => 'CommentController@store' )) }}
					
						{{ $errors->first('name', '<h3 class=\'col-title\'>Must have a name.</h3>')}}
						


				<div class="form-group">	
				{{ Form::text('name', $value = null, $attributes = array (
					'placeholder' => 'Name *',
					'class' => 'form-control'
				))}}
				</div>
				<div class="form-group">
				{{ $errors->first('body', '<h3 class=\'col-title\'>Must have a message.</h3>')}}
			    {{ Form::textarea('body', $value = null, $attributes = array (
					'placeholder' => 'Body *',
					'class' => 'form-control'
			    ))}}
				</div>
					<input type="submit" class="btn btn-lg btn-success" name="submit" value="Create Comment">
			    {{ Form::close() }}
				
					
			</div>
		</div>
	</div>

@stop