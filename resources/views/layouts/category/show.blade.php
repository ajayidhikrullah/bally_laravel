@extends('layouts.blog.master')
@section('content')
	<div class="col-sm-8 blog-main">
	
		<div class="well">
			<h3>{{$category3->title}}</h3>
			<p>{{$category3->category}}</p>
		</div>
	</div>
	<div class="well">
		<p></p>
	</div>
@endsection
