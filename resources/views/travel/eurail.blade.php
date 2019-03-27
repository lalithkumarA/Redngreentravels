@extends('travel.layout.master')

@section('title')
- Eurail
@endsection

@section('content')
<div class="home">
  <div class="background_image" style="background-image:url(img/eurail.jpg);margin-top: -30px;height:100%"></div>
</div>
<div  class="container" >
  <div style="font-size:14px;color:black;">
    <div class="col" style="font-family:Open Sans !important;font-weight:400">
      <div class="h3">
        Eurail
      </div><br>
      <div>One Stop-shopping for European Rail Travel</div>
      <br>
      <div class="h4" >
        What exactly is a Eurail Pass?
      </div> <br>
      A Eurail Pass is an <b style="color:black !important;">all-in-one train ticket </b> giving you flexible access to most trains across Europe. Unlike traditional train tickets, with Eurail you can go wherever you want, whenever you want. Some trains do ask you to make a reservation, but most trains can be boarded as easily as flashing your Pass.<br><br>
      Missed your train or changed your travel plans? No problem – just hop on board the next service and enjoy the ride.<br><br>
      <div class="h4">
        Planning your Eurail trip <br><br>
      </div>
      Traveling by train takes you straight to the heart of big cities and tiny villages just waiting to be explored.<br><br>
      You might have been plotting your Eurail trip for years, or you might have no idea where to start. But whether you’re a family, a couple, a group of friends, or a solo adventurer,<a href="https://www.eurail.com/en/eurail-passes">we have the perfect Pass</a> to make your European travel dreams come true.
      <br><br>
      <div class="h4">
        Booking seat reservations <br>
      </div><br>
      Once your Pass is on the way, the only thing left to do is book any seat reservations. While most trains in Europe are free to ride with your Eurail Pass in hand, some train companies ask you to pay an additional seat reservation fee.
      <br><br>
      This usually applies to night trains, high speed trains and some scenic routes, but it does mean you get a guaranteed spot on the train, plus you’ll save on overnight accommodation or get more time to explore.
      <br><br>
      Oh, and one more thing – don’t forget to download the <a href="https://www.eurail.com/en/plan-your-trip/rail-planner-app"> free Rail Planner App</a> before you go. It’ll give you offline access to train times across Europe, and show you whether or not you need to reserve a seat.
      <br><br>
    </div>
  </div>
</div>
<br>
@endsection
@section('topscriptfiles')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ url('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/contact_responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/cs.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('css/style1.css') }}" />
<link rel="stylesheet" href="{{ url('css/linearicons.css') }}">
<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('css/111') }}">
<link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ url('css/mainstyle.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
  @endsection
  
  @section('bottomscriptfiles')
  <script src="{{ url('js1/vendor/jquery-2.2.4.min.js') }}"></script>
  <script src="{{ url('js1/superfish.min.js') }}"></script>
  <script src="{{ url('js1/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('js1/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js1/main.js') }}"></script>
  
  @endsection