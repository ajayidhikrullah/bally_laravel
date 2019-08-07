<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>| HAYJAY |</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
    <!-- Bootstrap core CSS -->
    {{-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- //asset styles --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}"> --}}

    <link rel="stylesheet" href="{{asset('css/blog/bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog/blog.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">


    <!-- Custom styles for this template -->
    {{-- my own styles sheet and bootsrap --}}
    {{-- <link href="/css/blog/blog.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="/css/blog/bootstrap4.css"> --}}

  </head>

  <body>
    @include('layouts.blog.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The AJAYI's Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
    </div>


    <div class="container">
      <div class="row">
        
          @yield('content')

          @include('layouts.blog.sidebar')

      </div>

    </div>


    @include('../layouts.footer')
  </body>
  </html>