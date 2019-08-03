@extends('layouts.home')
@section('content')
	<h1>BALLY BLOG</h1>
	<div class="container">
			<h2>FEEDBACK FORM</h2>
			<form class="form-horizontal" method="POST" action="{{route('storePost')}}">
					@csrf
				<div class="form-group">
				<label class="control-label col-sm-2" for="error">Error Title:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="error" placeholder="the error you faced" name="error">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="feedback">Feedback:</label>
				<div class="col-sm-10">          
				  <input type="text" class="form-control" id="feedback" placeholder="describe the error" name="feedback">
				</div>
			  </div>

			  <div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-primary">Submit</button>
				</div>
			  </div>
			</form>
		  </div>
		  


	<div class="container">
		<button class="btn btn-success" id="btn">ShowPost</button>
		
		<br> <br>
		@if (count($posts) >= 1)
			@foreach ($posts as $post)
				<div id="postBox" class="well">
					<h2><span class="glyphicon glyphicon-envelope"></span></h2>
					<span class="glyphicon glyphicon-user"></span>
					<h3>This is the number {{$post->id}} user with Error Title of {{$post->error}} </h3>
					<small>Sent on {{$post->created_at}}</small>
				</div>
			@endforeach
		@else
				<p>No Posts found</p>
		@endif
	</div>
@endsection	

@section('script')
	
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

@endsection