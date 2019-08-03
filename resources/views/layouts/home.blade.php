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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

    <!--favicon-->

    <!--Google fonts-->
    
    <!--Font- awesome-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome/css/font-awesome.min.css')}}">
    
    <!--Boostrap css-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/boostrap.css')}}">
    <script src="{{asset('frontend/assets/js/jquery-3.4.1.min.js')}}"></script>
    
</head>

<body>
<div>
	<header>
		@include('layouts.navbar')
	</header>
	
        <div class="clearfix"></div>
    {{-- error handler --}}


	<div class="full_section">
            <div>
                @include('frontend.user.errors')
            </div>
        <div class="container">
            @yield('content')
        </div>
	
    </div>

{{-- footer --}}
	<footer class="main-footer">
		@include('layouts.footer')
	</footer>
    
    @yield('script')

</div>  
</body>
</html>