@extends('layouts.home')
@section('content')
	
@endsection
<div class="signup-page">
		<h4>Contact Us/Send Us a Message</h4>
		<!-- <p>SignUp to stay Updated</p> -->
		<form  method="post" action="{{route('store')}}">
			@csrf
			<div>
				<label for="name">Full-Name:</label>
				<input type="text" id="name" name="full_name" required placeholder="Enter your Full Name">
			</div>
			<div>
				<label for="mail">E-mail:</label>
				<input type="email" id="mail" name="user_mail" required placeholder="Enter your Email address">
			</div>
			<div>
				<label for="subject">Subject</label>
				<input type="text" name="subject" id="subject" placeholder="Enter your Heading">
			</div>
			<div>
				<label for="message">Your Message</label>
				<textarea name="message" id="message" cols="30" rows="10" placeholder="Type in your message, request or complaint"></textarea>
				<!-- <input type="text" id="message" name="message" placeholder="Your Message or request or Complain"> -->
			</div>
			<div>
				<!-- <input type="submit" value="Send Message" name="submit"> -->
			</div>
			<button type="submit" name="submit" class="btn-signup">Send Message</button>
		</form>            
</div>
<button class="btn btn-primary" id="con">Hello</button>

@section('script')
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
@endsection













<br>