<div class ='center-error'>
	@if (count($errors))
			<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
						<li class="error-bold">{{ $error }}</li>				
					@endforeach
					</ul>
			</div>
		</div>
		@endif