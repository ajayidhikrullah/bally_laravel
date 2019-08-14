@extends('layouts.blog.master')
@section('content')
	<div class="col-sm-8 blog-main">
	
		<div class="well">
			<h3>{{$category->title}}</h3>
			<p>{{$category->category}}</p>
		</div>

		<div class="container">
			<form action="/comment" method="post">
				@csrf
				<div class="well">
					<textarea name="comment" id="comment" class="form-control" placeholder="add comment here"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Comment</button>
				</div>
					
			
			</form>













	</div>

	
		<p></p>
	</div>
@endsection
