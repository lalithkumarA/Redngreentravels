@section('script')
<!DOCTYPE html>
<html>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  .mySlides {display:none;}
  </style>
  <body>
    @endsection
    @extends('travel.layout.master')
    @section('content')
    <div class="w3-bar ">
      <button class="w3-bar-item w3-button" onclick="opensector('London')">Highlights</button>
      <button class="w3-bar-item w3-button" onclick="opensector('Paris')">Itinerary</button>
      <button class="w3-bar-item w3-button" onclick="opensector('Tokyo')">Terms & Condition</button>
    </div>
    <div id="London" class=" sector">
      <div class="w3-content ">
        <img class="mySlides" src="img/tour-1.jpg" style="width:100%;">
        <img class="mySlides" src="img/tour-2.jpg" style="width:100%;">
        <img class="mySlides" src="img/tour-3.jpg" style="width:100%;">
        <img class="mySlides" src="img/tour-4.jpg" style="width:100%;">
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>
    </div>
    <div id="Paris" class="w3-container sector" style="display:none">
      <h2>Paris</h2>
      <p>Paris is the capital of France.</p>
    </div>
    <div id="Tokyo" class="w3-container sector" style="display:none">
      <h2>Tokyo</h2>
      <p>Tokyo is the capital of Japan.</p>
    </div>
    <script>
    function opensector(sectorName) {
    var i;
    var x = document.getElementsByClassName("sector");
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    }
    document.getElementById(sectorName).style.display = "block";
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
  </body>
</html>
@endsection