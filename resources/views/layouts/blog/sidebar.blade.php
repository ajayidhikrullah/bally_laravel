<div class="col-sm-3 offset-sm-1 blog-sidebar">
		{{-- <div class="sidebar-module sidebar-module-inset">
		  <h4>About</h4>
		  <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		</div> --}}
		{{-- categories --}}
		<div class="sidebar-module sidebar-module-inset">
				<h2>Sectors</h2>
				@foreach ($category_1 as $cat)
		<p><a href="/category/{{$cat->id}}">
			{{$cat->title}}</a>
			<br>
			{{$cat->created_at->toFormattedDateString()}}</p>
				@endforeach
		</div>


		<div class="sidebar-module">
		  <h4>Archives</h4>
		  <ol class="list-unstyled">
			<li><a href="#">March 2014</a></li>
			<li><a href="#">February 2014</a></li>
			<li><a href="#">January 2014</a></li>
			<li><a href="#">December 2013</a></li>
			<li><a href="#">November 2013</a></li>
			<li><a href="#">October 2013</a></li>
		  </ol>
		</div>
		<div class="sidebar-module">
		  <h4>Elsewhere</h4>
		  <ol class="list-unstyled">
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		  </ol>
		</div>
	  </div><!-- /.blog-sidebar -->