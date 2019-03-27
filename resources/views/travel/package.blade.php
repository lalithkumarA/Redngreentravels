@extends('travel.layout.master')


@section('content')
<div class="home">
  <div class="background_image" style="background-image:url({{ url('img/bg_2.jpg') }});margin-top: -30px;height:80%"></div>
</div>
<div class="h2 text-center" style="margin-top:-7%">
 {{ $Additinerary->packagename }}
</div><br>
<section class=" container">
  <div class="row ">
    <div class="col-md-8 col-sm-12 col-xs-12">
      <div class="containercard" >
        <div id="myDIV" class="w3-bar" style="background-color:white;">
          <button class="w3-bar-item  button1 active" onclick="openSection('Highlights')"style="border-left-style: solid; border-left-width: 0px;border-right-style: solid;border-right-width: 0px;border-top-style: solid;border-top-width: 0px;border-bottom-style: solid;border-bottom-width: 0px;border-color: #2c2e3e;">Highlights</button>
          <button class="w3-bar-item  button1" onclick="openSection('Itinerary')" style="border-left-style: solid; border-left-width: 0px;border-right-style: solid;border-right-width: 0px;border-top-style: solid;border-top-width: 0px;border-bottom-style: solid;border-bottom-width: 0px;border-color: #2c2e3e;">Itinerary</button>
          @if(!empty(( $Additinerary->Terms_and_conditions )))
          <button class="w3-bar-item  button1" onclick="openSection('Terms&Condition')" style=" ;border-left-style: solid; border-left-width: 0px;border-right-style: solid;border-right-width: 0px;border-top-style: solid;border-top-width: 0px;border-bottom-style: solid;border-bottom-width: 0px;border-color: #2c2e3e;">Terms &amp Condition</button>
          @endif
        </div>
        <div id="Highlights" class=" sector" style="  border-top-left-radius: 25px;">
          <div class="w3-content ">
            @foreach($Images as $Image)
              <img class="mySlides" src="{{ url($Image->image_name) }}" style="width:100%;min-height:100%;">
            @endforeach
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>
          <div class="title"><br>
            <div class=" h4 "  >Highlights</div>
            <p >{{ $Additinerary->highlights }}</p>
            <div class=" h4" >Package Includes:</div>
            <p >{{ $Additinerary->Package_includes }}</p>
            <div class=" h4" >Package Excludes:</div>
            <p >{{ $Additinerary->Package_Excludes }}</p>
            <br>
          </div>
        </div>
        <div id="Itinerary" class="w3-container w3-bar sector" style="display:none">
          <br>
          <div class="h3">Itinerary</div>
          <br>
          <p><?php print_r($Additinerary->overview)?>.</p>
          <br>
        </div>
        @if(!empty(( $Additinerary->Terms_and_conditions )))
        <div id="Terms&Condition" class="w3-container w3-bar sector" style="display:none">
          <br>
          <div class=" h4" >Terms & Conditions:</div>
          <p >{{ $Additinerary->Terms_and_conditions }}</p>
          <br>
        </div>
        @endif
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="containercard" style="margin-top:13%;">
        <br>

        <div class=" h3"  >Our Plan</div>
        @if(!empty(( $Additinerary->date )))
        <br>
        <span>
          <div class=" h4" ><span> <i class="fa fa-plane">&nbsp</i> Depature : <span style="color:red">{{ date("dS F Y", strtotime($Additinerary->date)) }} </span> </span> </div>
        </span>
        @endif
        <br>
        <div class=" h4" ><span><i class="fa fa-money">&nbsp</i>Cost : <span style="color:red">INR {{ $Additinerary->cost }}</span></span> </div>
        <br>
        <div class=" h4" ><span><i class="fa fa-clock-o">&nbsp</i>Duration : <span style="color:red">{{ $Additinerary->duration }} {{ ($Additinerary->duration==1) }}</span></span> </div>
        <br>
       @if(!empty($Additinerary->complementary))
        <div class=" h4" >
          Complamentary :<br> <br>
          <div class="row text-center">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @foreach (unserialize($Additinerary->complementary) as $item) 
                @foreach(App\Complementaries::where('id',$item)->get() as $Catagory)
                <span><img src="{{ url($Catagory->image_name) }}" style="width:50px;height: 50px;"></span>
                @endforeach
                @endforeach
            </div>
          </div>
        </div>
        @endif
        <br>
      </div>
    </div>
  </div>
<br><br>
<div class="row">
  @foreach($RandomDatas as $RandomData)
      @if(!empty($RandomData->itineryData->image->image_name))
        <div class="col-lg-4 ">
            <div class="container11" onclick="window.location.href = '{{ url('/package/'.@$RandomData->itineryData->id.'/'.@$RandomData->category->category) }}';">
            <a href="{{ url('/package/'.@$RandomData->itineryData->id.'/'.@$RandomData->category->category) }}">
            <img class="img-fluid c1" src="{{ url(@$RandomData->itineryData->image->image_name) }}" alt="">
            <div class="h">
              <h3> {{ @$RandomData->itineryData->packagename }}</h3>
              <h3><small>{{ @$RandomData->itineryData->cost}}</small></h3>
            </div>
            </a>
          </div>
        </div>
      @endif
  @endforeach
</div>
    </section>
<br><br>
@endsection
@section('topscriptfiles')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="{{ url('/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ url('/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/styles/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/styles/contact_responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/cs.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('/css/style1.css') }}" />
<link rel="stylesheet" href="{{ url('/css/linearicons.css') }}">
<link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('/css/111') }}">
<link rel="stylesheet" href="{{ url('/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ url('/css/mainstyle.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
button{
max-width:42%;
}
.button1{
color: #000;
background-color: #f1f1f1;
}
.active, .button1:hover {
background-color:red;
color: white;
border: none !important;
}
.button1:hover {
background-color:red;
color: white;
}
.containercard{
height: auto;
width: auto;
background-color: #f1f1f1;
}
.h3,.h4,p{
margin-bottom: 5px;
margin-left: 5%;
margin-right: 3%;
}
@media screen and (max-width: 600px) {
.button1 {
font-size: 12.5px;
}
}
</style>
@endsection
@section('bottomscriptfiles')
<script>
function openSection(sectionName) {
var i;
var x = document.getElementsByClassName("sector");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
document.getElementById(sectionName).style.display = "block";
}
</script>
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
showDivs(slideIndex += n);
}
function showDivs(n) {
var i;
var x = document.getElementsByClassName("mySlides");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length}
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
x[slideIndex-1].style.display = "block";
}
</script>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("button1");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function() {
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", "");
this.className += " active";
});
}
</script>
<script src="{{ url('/js1/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ url('/js1/superfish.min.js') }}"></script>
<script src="{{ url('/js1/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('/js1/owl.carousel.min.js') }}"></script>
<script src="{{ url('/js1/main.js') }}"></script>
</body>
</html>
@endsection
