@extends('layouts.home')
@section('content')

{{-- <div class="container"> --}}
	{{-- <div class="container marketing"> --}}

		<!-- Three columns of text below the carousel -->
		{{-- <div class="row"> --}}
		  <div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
			<h2>Heading</h2>
			<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		  </div><!-- /.col-lg-4 -->

		  <div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
			<h2>Heading</h2>
			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		  </div><!-- /.col-lg-4 -->
		  
		  <div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
			<h2>Heading</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		  </div><!-- /.col-lg-4 -->
		</div><!-- /.row -->

		<div class="container">
				<h2>Basic Table</h2>
				<p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
				<table class="table">
				  <thead>
					  <h1>{{$tableTopic}}</h1>
					
					  <tr>
						<th>firstName</th>
					  	<th>MiddleName</th>
					  	<th>Email</th>
					</tr>
				  </thead>
				  <tbody>
					@if(count($profiles) > 0)
						@foreach ($profiles as $profile)
						
						<tr>
						<td>{{$profile}}</td>
						<td>{{$profile}}</td>
						<td>{{$profile}}</td>
						</tr>
														
					@endforeach
					@endif
 					<tr>
					  <td>July</td>
					  <td>Dooley</td>
					  <td>july@example.com</td>
					</tr>
				  </tbody>
				</table>
			  </div>






{{-- </div>	 --}}
@endsection
