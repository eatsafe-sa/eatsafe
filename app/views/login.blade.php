@extends('layouts.main')

@section('content')
{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
<form class="form-signin" role="form">
    <h2 class="form-signin-heading">EatSafe-SA Administrator Login</h2>
   	{{ Form::text('email', $value = null, $attributes = array ('placeholder' => 'E-Mail Address','class' => 'requiredField form-input','autofocus' => 'autofocus'))}}
    {{ Form::password('password', array ('placeholder' => 'Password','class' => 'requiredField form-input'))}}
	{{ Form::checkbox('remember-me',array('class'=>'checkbox')), <span> Remember Me</span> }}
    <hr>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login in</button>


{{ Form::close() }}

@stop

