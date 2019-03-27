@extends('travel.layout.master')
@section('title')
- Why Us
@endsection
@section('content')
<div class="super_container">
   <!-- Home -->
    <div class="home">
      <div class="background_image" style="background-image:url(img/sub-banner.jpg)"></div>
    </div>
	<!-- <section class="home-about-area visible-lg visible-md" style="padding-top: 5%;padding-bottom: 5%"> -->
	    <div class="container"><h1 class="entry-title">Why Us</h1><br>
		    <article id="post-66" class="post-66 page type-page status-publish hentry">
		        <div class="entry-content">
		            <p>
		            	A STAR TOURS PTE LTD Agents &#038; Customers choose us to help their own unique adventure. As such, we can offer following advantages:
		            </p>
		            <div class="row">
		                <div class="col-md-3 col-sm-12">
		                    <div class="tour_grid">
		                    <div><h4>Global Network</h4></div><br>		                    
               				<div class="why_image">
               					<img src="img/globalnetwork.jpg" alt="">
               				</div>            				
		                    <p>We have centralized reservations office in Singapore &#038; India.</p>
		                  	</div>
		                </div>
		                <div class="col-md-3 col-sm-12">
		                  	<div class="tour_grid">
		                    <div><h4>Quality Experience</h4></div><br>
		                    <div class="why_image">
               					<img src="img/quality.jpg" alt="">
               				</div>
		                    <p>Our goal is to provide a seamless travel experience for our clients.</p>
		                   	</div>
		               	</div>
		               	<div class="col-md-3 col-sm-12">
		                  	<div class="tour_grid">
		                    <div><h4>Competitive Hotel Rate</h4></div><br>
		                    <div class="why_image">
               					<img src="img/competitive.jpg" alt="">
               				</div>
		                    <p>We have contract rates with over 1000 hotels and pride ourselves on having the most attractive pricing strategies in the region.</p>
		                  	</div>
		               	</div>
		               	<div class="col-md-3 col-sm-12">
		                  	<div class="tour_grid">
		                    <div><h4>Rapid Response</h4></div><br>
		                    <div class="why_image">
               					<img src="img/response.jpg" alt="">
               				</div>		                    
		                    <p>All quotation and booking requests are answered promptly and accurately with no exceptions.</p>
		                	</div>
		               	</div>
		               	<div class="col-md-3 col-sm-12">
		                  	<div class="tour_grid">
		                    <div><h4>Innovative Online Booking Engine</h4></div><br>
		                    <div class="why_image">
               					<img src="img/booking.jpg" alt="">
               				</div>		                    
		                    <p>Our booking and feedback systems are unrivalled in the industry.</p>
		                 </div>
		               	</div>
		               	<div class="col-md-3 col-sm-12">
		                  	<div class="tour_grid">
		                    <div><h4>International Standards/Financial Stability</h4></div><br>
		                    <div class="why_image">
               					<img src="img/financial.jpg" alt="">
               				</div>
		                    <p>Our Operations and sales are fully licensed and financially stable. All guides and drivers are thoroughly trained and licensed.</p>          
		                  	</div>
		               	</div>
		               	<div class="col-md-3 col-sm-12">
		                  	<div class="tour_grid">
		                    <div><h4>Offers a competitive pricing strategy</h4></div><br>
		                    <div class="why_image">
               					<img src="img/offers-1.jpg" alt="">
               				</div>
		                    <p>Our goal is to offer the best rate for travel agents and customer in each region.</p>                     
		                  	</div>
		               	</div>
		            </div>
	        	</div>
	    	</article>
	   	</div>
	<!-- </section> -->
</div>
@endsection

@section('bottomscriptfiles')
<script src="{{ url('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ url('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ url('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ url('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ url('plugins/easing/easing.js') }}"></script>
<script src="{{ url('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ url('js1/about.js') }}"></script>
<script src="{{ url('js1/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ url('js1/superfish.min.js') }}"></script>
<script src="{{ url('js1/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('js1/owl.carousel.min.js') }}"></script>
<script src="{{ url('js1/main.js') }}"></script>
</body>
</html>
@endsection
@section('topscriptfiles')
<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ url('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/about.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/about_responsive.css') }}  ">
<link href="https://fonts.googleapis.com/css?family=Oswald:100,200,400,300,500,600,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ url('css/cs.css') }}">
<link rel="stylesheet" href="{{ url('css/linearicons.css') }}">
<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('css/111') }}">
<link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ url('css/mainstyle.css') }}">
<style>
.pp{
font-family: "Oswald";
font-size: 36px;line-height: 43.2px;font-weight: 300;
}
</style>
</head>
<body>
@endsection