@extends('layouts.home')
@section('content')	
	<div class="signup-page">
	<form action="{{route('sign')}}" method="POST">
			@csrf
			<div id="form-content">
				<div class="text-input">
					<label for="name">First Name:</label>
						<input type="text" class="inp_fid" id="name" name="name" placeholder="type in your firstname">
				</div>
				<div class="text-input">
					<label for="fname">Last Name:</label>
					<input type="text" class="inp_fid" name="fname" id="fname" placeholder="your surname">
				</div>
				<div class="text-input">
					<label for="email">Email:</label>
					<input type="email" class="inp_fid" name="email" id="email" placeholder="your mail" >
				</div>

				<div class="text-input">
					<label for="pwd">Password</label>
					<input type="password" class="inp_fid" name="pwd"  id="pwd" placeholder="your password">
				</div>

				<div class="text-input">
					<label for="re_pwd">Re-enter Password</label>
					<input type="password" class="inp_fid" name="re_pwd"  id="re_pwd" placeholder="Re-enter password">
				</div>
			</div>
			<input type="submit" value="Sign Up" class="inp_fid" name="submit">
			<!-- <button type="submit" class="btn-signup">Sign Up</button> -->
		</form>
	</div>
@endsection