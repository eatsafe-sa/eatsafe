@extends('layouts.main')

@include('layouts.nav')
@section('content')
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h1 class="text-center">Login</h1>
  </div>
  <div class="modal-body">
{{ Form::open(array('method' => 'post', 'action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
    <h2 class="form-signin-heading">Admin Login</h2>
   	{{ Form::text('email', $value = null, $attributes = array ('placeholder' => 'E-Mail Address','class' => 'requiredField form-control','autofocus' => 'autofocus'))}}
    {{ Form::password('password', array ('placeholder' => 'Password','class' => 'requiredField form-control'))}}
	<label class="checkbox">
		{{ Form::checkbox('remember-me', 0, null)}}Remember Me
	</label>
    <hr>
    <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
{{ Form::close() }}
</div>
   <div class="modal-footer">
   <div class="col-md-12">
   <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
   </div>    
   </div>
   </div>
   </div>
   </div>

   <p align="center"><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal"> Login</button>

@if(Auth::check())
<p>You are logged in.</p>
@endif

@stop

