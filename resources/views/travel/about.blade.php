@extends('travel.layout.master')

@section('title')
- About Us
@endsection

@section('content')
<div class="super_container">
   <!-- Home -->
   <div class="home">
      <div class="background_image" style="background-image:url(img/sub-banner.jpg)"></div>
   </div>
   <!-- About -->
   <div class="about visible-lg visible-md">
      <div class="container">
         <div class="row">
            <div class="col text-center">
               <div class="section_title"><div class="h">About Us</div></div>
            </div>
            <div class="col-lg-12">
               <div class="about_content">
                  <div class="about_text" style="margin-top: 1%">
                  <p style="font-size: 16px; text-align: justify;">
                     Red and Green Travels and Event Management we convey our thanks and requesting your blessing and support for our Business.Red and Green Travel (RGT) is an upcoming Travel, Tours and event management in Chennai. The operations are spear headed by a qualified trade professional, a veteran within the Chennai travel industry with more than three decades of experience, well supported by qualified team members having proven experience in client relationship management, ground operations and logistics. We offer the following travel related services world-wide.
                  </p><br>
                  </div>
               </div> 
            </div> 
            <div class="col-lg-6">
               <div class="about_content">
                  <div class="about_text" style="margin-top: 1%">
                  <p style="font-size: 16px; text-align: justify;">
                     Our experts have the good relationship with Airlines and hotels to provided good service to our client. We are sure here, our experts will make your journey and complete assistance to your travel peaceful and comfortable. Particularly rescheduled and early check in hotel with other value added service.
                  </p><br>
                  </div>
               </div> 
            </div>  
            <div class="col-lg-6">
               <div class="about_content">
                  <div class="about_text" style="margin-top: 1%">
                  <p style="font-size: 16px; text-align: justify;">
                     Red and Green Travels have tied up with leading DMC’s in all over world. Our first supported event was happened in Canada with 7days/ 08 Nights for the Gynecologist from all over India. More than 96 Doctors was participated with the Event. We have covered more than 4 destination on the Event.
                  </p><br>
                  </div>
               </div> 
            </div>
            <div class="col-lg-12">
                  <div class="about_text" style="margin-top: 1%">
                     <p style="font-size: 16px; text-align: justify;">
                        <strong>Red and Green travel and Event Management is one of the leading and authorize travel agent for Leading DMC service in Tamil Nadu</strong>
                     </p>
                  </div>
               </div>
         </div>
      </div>
   </div>
   <div class="about visible-xs visible-ms">
      <div class="container">
         <div class="row">
            <div class="col text-center">
               <div class="section_title"><div class="h">About Us</div></div>
            </div>
         </div>
         <div class="row about_row" style="text-align: justify;">            
            <div class="col-lg-6">
               <div class="about_content">
                  <div class="about_text" style="margin-top: 1%">
                     <p>
                        On behalf of Red and Green Travels and Event Management we convey our thanks and requesting your blessing and support for our Business.Red and Green Travel (RGT) is an upcoming Travel, Tours and event management in Chennai. The operations are spear headed by a qualified trade professional, a veteran within the Chennai travel industry with more than three decades of experience, well supported by qualified team members having proven experience in client relationship management, ground operations and logistics. We offer the following travel related services world-wide.
                     </p>
                  </div><br><br>                  
                  <div class="about_text" style="margin-top: 1%">
                     <p>
                        Our experts have the good relationship with Airlines and hotels to provided good service to our client. We are sure here, our experts will make your journey and complete assistance to your travel peaceful and comfortable. Particularly rescheduled and early check in hotel with other value added service.
                     </p>
                  </div>
                  <div class="about_text" style="margin-top: 1%">
                     <p>
                        Red and Green Travels have tied up with leading DMC’s in all over world. Our first supported event was happened in Canada with 7days/ 08 Nights for the Gynecologist from all over India. More than 96 Doctors was participated with the Event. We have covered more than 4 destination on the Event.
                     </p>
                  </div>                  
                  <div class="about_text" style="margin-top: 1%">
                     <p>
                        <strong>Red and Green travel and Event Management is one of the leading and authorize travel agent for Leading DMC service in Tamil Nadu</strong>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
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
