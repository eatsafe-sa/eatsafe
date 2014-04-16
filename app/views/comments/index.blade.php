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

	@foreach ($comments as $comment)
	
		<div class="container">
			<div class="col-md-8">
			    <h2>{{{$comment->name}}}</h2>
			    <p>{{{$comment->body}}}</p>
		    <div>
				<span class="badge" style="color:black;">{{{$comment->created_at->format('l, F jS Y @ h:i A')}}}</span><div class="pull-right">
				
				@if(Auth::check() && Auth::user()->is_admin)

				<a href="#" class="btnDeleteComment" data-comment_id="{{{$comment->id}}}"><span class="label label-danger"> Delete Comment </span></a>
				@endif
			</div>         
		     </div>
			    <hr>
			</div>
		</div>
	@endforeach
		{{ Form::open(array('method' => 'delete', 'id' => 'formDeleteComment')) }}
		{{ Form::close() }}

		{{ $comments->links()}}
			

</div>

@stop
@section('bottomscript')

<script>

$('.btnDeleteComment').on('click', function(e) {
	var comment = $(this).data('comment_id');
	e.preventDefault();
	if(confirm('Are you sure you want to delete this post?')) {
		$('#formDeleteComment').attr('action', '/comments/' + comment);
		$('#formDeleteComment').submit();
	}
});

</script>
@stop