@extends('travel.layout.master')

@section('title')
- PassportServices
@endsection

@section('content')
<div class="super_container">
  <<div class="home">
    <div class="background_image" style="background-image:url(img/passportandvisa.jpg);margin-top: -30px;"></div>
  </div>
  <!--Passport-->
  <section class="home-about-area " style="padding-top: 4%">
    <div class="passport ">
      <h1 class="h" style="text-align: center; padding-bottom: 0%">
      Passport
      </h1>
      <div class="row align-items-center justify-content-end" style="margin-top: 4%">
        <div class="col-lg-6 col-md-12 ">
          <p>
            Passport is a travel document,issued by a country’s government, that certifies the identity and nationality of its holder primarily for the purpose of international travel. Passport is the most essential travel document for any international travel. Passport should have validity of 6 months from the date of travel.
          </p>
          <div style="text-align: center;padding-top: 5%;"><a href="{{url('/contact')}}" class="primary-btn text-uppercase" >Apply</a></div>
        </div>
        <div class="col-lg-6 col-md-12 photo ">
          <img class="img-fluid" src="img/passport.jpg" alt="">
        </div>
      </div>
    </div>  <hr>
    <div class="visa ">
      <h1 class="h" style="text-align: center;">
      VISA
      </h1>
      <div class="row align-items-center justify-content-end">
        <div class="col-lg-6 col-md-12 photo ">
          <img class="img-fluid" src="img/visa.jpg" alt="">
        </div>
        <div class="col-lg-6 col-md-12 ">
          <p>
            VISA,  Indian passport holders do need to have a visa to travel to  most of the countries in the world. We  Treasure travels, give you visa assistance for business and toursist travellers.
          </p>
          <div style="text-align: center;padding-top: 5%;"><a href="{{url('/contact')}}" class="primary-btn text-uppercase" >Contact</a></div>
        </div>
      </div>
    </div>
    <hr>
  </section>
</div>
@endsection
@section('topscriptfiles')
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" href="css/cs.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/" />
<!--
CSS
============================================= -->
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/111">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/mainstyle.css">
<style>.pp{
font-family: "Oswald";
font-size: 36px;line-height: line-height: 43.2px;font-weight: 300;
color: rgb(24, 24, 24);
}
.passport{
padding-left: 15%;
padding-right: 15%;
}
.visa{
padding-left: 15%;
padding-right: 15%;
padding-top: 5%;
}
.photo{
padding-top: 8%;
padding-bottom: 8%;
}
</style>
@endsection
@section('bottomscriptfiles')
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js1/vendor/jquery-2.2.4.min.js"></script>
<script src="js1/superfish.min.js"></script>
<script src="js1/jquery.magnific-popup.min.js"></script>
<script src="js1/owl.carousel.min.js"></script>
<script src="js1/main.js"></script>
</body>
</html>
@endsection