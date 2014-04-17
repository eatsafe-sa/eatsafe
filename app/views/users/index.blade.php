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
	<h2 class="text-center">Users &amp; Admins</h2>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID#</th>
					<th>E-Mail</th>
					<th>Admin</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{{ $user->id }}}</td>
						<td>{{{ $user->email }}}</td>
						@if($user->is_admin)
						<td>Yes</td>
						@else
						<td>No</td>
						@endif
						<td><a href="{{ action('UsersController@edit', $user->id) }}"<i class="fa fa-pencil-square-o"></i></td>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop

@section('bottomscript')
@stop