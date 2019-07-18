@extends('layouts.home')
@section('content')
	<section class="sect">
		<main class="banner-sect">
			<h3 class="banner-head">WELCOME TO <span class="banner-head-name"> HAMZARTS </span>FASHION HOME</h3>
			<p class="banner-address">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
		</main>
	</section>

	<section>
		<div class="images-container">
			<div class="container-text"><h1>CHECK OUT</h1></div>
			<article class="img-title1"><h4>Women Outfit</h4>
				<div class="img-container1">
					<img src="{{asset('frontend/assets/img/balqeesimg/bannerimg.png')}}" alt="Men">
				</div>
			</article>            
			<article class="img-title1"><h4>CEO</h4>
					<div class="img-container2">
						<img src="{{asset('frontend/assets/img/balqeesimg/bally.jpg')}}" alt="bally" href="#">
					</div>
			</article>
			<div style="clear:both"></div>
		</div>
		
		<div class="colum-content-container">
			<h4 class="offer">Offer</h4>
			<article>
				<div class="article-content">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Sunt, et nisi. At vero sequi natus perfe
					rendis asperiores eaque, illo rem labore,
					veniam doloribus voluptas animi, inventore adipisci neque ipsum in!...<a href="#">read more</a>
				</div>
			</article>
			
			<aside>
				<div class="article-content-aside">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Sunt, et nisi. At vero sequi natus perfe
								rendis asperiores eaque, illo rem labore,
								veniam doloribus voluptas animi, inventore adipisci neque ipsum in!</p>
				</div>
			</aside>
			<div style="clear:both"></div>
		</div>        
	</section>
@endsection