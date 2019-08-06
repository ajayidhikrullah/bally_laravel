@extends('layouts.blog.master')
@section('content')
<div class="col-sm-8 blog-main">
	<h1>Create a Post here or category</h1>

	<form class="form-horizontal">
			<div class="form-group">
			  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			  <div class="col-sm-10">
				<input type="text" name="" class="form-control" id="inputEmail3" placeholder="Email">
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword3" class="col-sm-2 control-label">Posts</label>
			  <div class="col-sm-10">
				<input type="text" class="form-control" id="inputPassword3" placeholder="put something here">
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
				<button type="submit" class="btn btn-primary">Sign in</button>
			  </div>
			</div>
		  </form>
</div>	
@endsection