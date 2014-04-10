@extends('layouts.main')

@section('topscript')
	<link rel="stylesheet" href="/css/signin.css" />

@section('content')
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

@if(Auth::check())
<p>You are logged in.</p>
@endif

@stop

