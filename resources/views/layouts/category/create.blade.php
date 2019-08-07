@extends('layouts.blog.master')
@section('content')
<div class="col-sm-8 blog-main">
		@include('frontend.user.errors')

	<h1>Create a category</h1>

	<form class="form-horizontal" method="POST" action="">
		@csrf
		{{-- {{csrf_field()}} --}}
			<div class="form-group">
				<label for="title" class="col-sm-2 control-label">CategoryTitle</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="title" name="title" placeholder="put something here">
				</div>
			</div>	
			<div class="form-group">
			  <label for="category" class="col-sm-2 control-label">Category Name:</label>
			  <div class="col-sm-10">
				<input type="text" name="category" class="form-control" id="category"> 
			  </div>
			</div>
			
			{{--<div class="form-group">
			   <div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
				  <label>
					<input type="checkbox"> Remember me
				  </label>
				</div>
			  </div>
			</div> --}}
			<div class="form-group">
			  <div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Publish Category</button>
			  </div>
			</div>
		  </form>

</div>


@endsection