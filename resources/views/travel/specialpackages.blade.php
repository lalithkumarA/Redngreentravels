@extends('travel.layout.master')

@section('title')
- {{ $catagories->category}}
@endsection
<style >

</style>
@section('logo')
<div id="img-fluid-logo" class="lo">
  <a href="{{ url('/') }}"><img class="menu_logo" src="{{ URL('/img/logo.png') }}" alt="" title="" /></a>
</div>
@endsection


@section('content')
<div class="super_container">
  <div class="home">
    <div class="background_image" style="background-image:url({{ url('/img/bg_2.jpg') }});margin-top: -30px;"></div>
  </div>
  <div class="row" style="padding-bottom:5%;">
    <div class="container section-gap " >
      <h3>Filters</h3>
      <select class="form-control FilterType" style="height:40px;">
        <option value="all">All</option>
        <option value="Domestic">Domestic</option>
        <option value="International">International</option>
      </select>
      <div class="row" id="LoadProductContent">
      </div>
    </div>
  </div>
</div>
@endsection


@section('topscriptfiles')
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.container11 {
position: relative;
width: 100%;
padding-left:0%;
padding-top: 3%;
}
.FilterType{
width:10%;

}
.image {
display: block;
width: 100%;
height: auto;
padding-left:5px;
padding-right:5px;
}
@media screen and (max-width: 600px) {
.image {
display: block;
width: 100%;
height: auto;
padding-left:2px;
padding-right:2px;
}
.FilterType{
width:40%;

}
}
.overlay1 {
font-family: Oswald;
position: absolute;
bottom: 0;
color: white;
width: 100%;
transition: .5s ease;
opacity:1;
padding: 20px;
text-align: left;
}
@media screen and (max-width: 600px) {
.overlay1 {
font-family: Oswald;
position: absolute;
bottom: 0;
color: white;
width: 100%;
transition: .5s ease;
opacity:1;
padding: 10px;
text-align: left;
}
}
.h7{
color: white;
font-size: 20px;
font-weight: 400;
bottom: 0;
}
.pric{
color: white;
font-size: 22px;
font-weight: 400;  }
@media screen and (max-width: 600px) {
.h7{
color: white;
font-size: 14px;
font-weight: 300;
bottom:0;
}
}
@media screen and (max-width: 600px) {
.pric{
color: white;
font-size: 15px;
font-weight: 300;  }
}
.container11:hover .overlay1  {
opacity: 1;
background-color:White;
color: black;
}
.container11:hover .overlay1 .h7 {
opacity: 1;
color: black;
}
.container11:hover .overlay1 .pric {
opacity: 1;
color: black;
}
.section-gap{
padding-left: 5% !important;
padding-right:5% !important;
padding: 10px 0;
}
</style>
@endsection


@section ('bottomscriptfiles')
  <script src="{{ url('js1/vendor/jquery-2.2.4.min.js') }}"></script>
  <script src="{{ url('js1/superfish.min.js') }}"></script>
  <script src="{{ url('js1/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('js1/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js1/main.js') }}"></script>

<script type="text/javascript">
   $( document ).ready(function() {
     var page = 1;
     load_more(page);
   $(window).scroll(function() {
       if($(window).scrollTop() + $(window).height() >= $(document).height()) {
           page++;
           load_more(page);
       }
   });

     $('.FilterType').change(function() {
         page = 1;
         $('#LoadProductContent').html('<img id="imageLoad" src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif">');
         load_more(page);
     })

 function load_more(page){
   var catagoryId = '<?php echo  $catagories->id ?>';
   var FilterType = $('.FilterType option:selected').attr('value');
     $.ajax({
         url: '{{url('/getFilterData')}}?page=' + page,
         type: "get",
         data:{catagoryId:catagoryId,FilterType:FilterType},
         datatype: "html",
         success : function (data){
            setTimeout(function() {
                console.log(data);
                $('#imageLoad').remove();
                $('#LoadProductContent').append(data);
             }, 1000);
         }
     })
 }
});
</script>

@endsection
