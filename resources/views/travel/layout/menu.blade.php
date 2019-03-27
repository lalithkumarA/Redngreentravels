<header id="header">
   <div class="header-top">
      <div class="container">
         <div class="row align-items-center visible-lg visible-md">
            <div class="col-lg-6 col-sm-6 col-xs-6 header-top-left">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-6 header-top-right">
               <div class="header-social">
                 <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <!-- <a href="#"><i class="fa fa-instagram"></i></a> -->
               </div>
            </div>
         </div>
         <div class="row visible-xs visible-sm">
            <div class="col-lg-6 col-sm-6 col-xs-6 header-top-left">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-6 header-top-right">
               <div class="header-social-sm" >
                  <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <!-- <a href="#"><i class="fa fa-instagram"></i></a> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container main-menu" style="" >
      <div class="justify-content-between d-flex">
         <div id="img-fluid-logo" class="lo">
            <a href="{{ url('/') }}"><img class="menu_logo" src="{{ url('img/logo.png') }}" style="height: 34px;" alt="" title="" /></a>
         </div>
         <div class="menucontainer">
            <nav id="nav-menu-container" class=" ">
               <ul class="nav-menu">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/about') }}">About us</a></li>
                  <li><a href="{{ url('/why-us') }}">Why Us</a></li>
                  <li><a href="{{ url('/business') }}">Business</a></li>
                  <li><a href="{{ url('/tour-packages') }}">Tour packages</a></li>
                  <li><a href="{{ url('/contact') }}">Contact us</a></li>
               </ul>
            </nav>
         </div>
         <!-- #nav-menu-container -->
      </div>
   </div>
</header>