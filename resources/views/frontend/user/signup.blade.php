@extends('layouts.home')
@section('content')	
	<div class="signup-page">
		<form action="signup.html" method="POST">
			@csrf
			<div id="form-content">
				<div class="text-input">
					<label for="fname">First Name:</label>
						<input type="text" class="inp_fid" id="fname" name="fname" required placeholder="type in your firstname">
				</div>
				<div class="text-input">
					<label for="lname">Last Name:</label>
					<input type="text" class="inp_fid" name="lname" id="lname" required placeholder="your surname">
				</div>
				<div class="text-input">
					<label for="email">Email:</label>
					<input type="email" class="inp_fid" name="email" id="email" required placeholder="your mail" >
				</div>

				<div class="text-input">
					<label for="pwd">Password</label>
					<input type="password" class="inp_fid" name="pwd"  id="pwd" required placeholder="your password">
				</div>

				<div class="text-input">
					<label for="re_pwd">Re-enter Password</label>
					<input type="password" class="inp_fid" name="re_pwd"  id="re_pwd" required placeholder="Re-enter password">
				</div>
			</div>
			<input type="submit" value="Sign Up" class="inp_fid" name="submit">
			<!-- <button type="submit" class="btn-signup">Sign Up</button> -->
		</form>
	</div>
@endsection