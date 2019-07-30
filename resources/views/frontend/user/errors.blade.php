<div class ='center-error'>
	@if(count($errors))
			<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
						<li class="error-bold">{{ $error }}</li>				
					@endforeach
					</ul>
			</div>
		@endif

	@if (session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif

</div>