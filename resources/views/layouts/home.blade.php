<!DOCTYPE html>
<html lang="en">
<head>
    <!-- important tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Title-->
    <title>[M N L]</title>

    <!--favicon-->
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon/favicon.ico')}}">

    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Railway:100,200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <!--Font- awesome-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome/css/font-awesome.min.css')}}">
    
    <!--Boostrap css-->
    <!-- <link rel="stylesheet" href="boostrap.css"> -->
    <!-- <script src="main.js"></script> -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/boostrap.css')}}">

    <script src=""></script>
    
</head>

<body>
<div>
	<header>
		@include('layouts.navbar')
	</header>
	
        <div class="clear"></div>
    
	<div class="full_section">
	
		@yield('content')
	
    </div>
    
    <div>
        @include('frontend.user.errors')
    </div>

{{-- footer --}}
	<footer class="main-footer">
		@include('layouts.footer')
	</footer>
	<script src="js/script.js"></script>
</div>  
</body>
</html>