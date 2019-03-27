@extends('travel.layout.master')

@section('content')
<style media="screen">
.cruis{
  padding-top: 4%;
  padding-bottom: 4%;
}
.onhover {

  opacity: 1;
}
.onhover_sm {

  opacity: 1;
}
.onhover:hover{
  opacity: 0.5;
}
.onhover_sm:hover{
  opacity: 0.5;
}
.onhover p:hover{
  opacity: 1;
}
.onhover_sm p:hover{
  opacity: 1;
}
.onhover p{
  margin-top: -40%;
  margin-left: 35%;
  color: white;
  font-size: 20px;
  font-weight: 700;
  position: absolute;
  opacity: 2;
}
.onhover_sm p{
  margin-top: -40%;
  margin-left: 20%;
  color: white;
  font-size: 14px;
  font-weight: 700;
  position: absolute;
  opacity: 2;
}
@media only screen and (max-width: 600px) {
  .cruis{
    padding-top: 7%;
    padding-bottom: 7%;
  }

}

</style>
<!-- slider-->
<div id="slidy-container">
  <figure id="slidy">
    <img src="{{ url('img/1.jpg') }}">
    <img src="{{ url('img/2.jpg') }}">
    <img src="{{ url('img/3.jpg') }}">
    <img src="{{ url('img/5.jpg') }}">
    <img src="{{ url('img/6.jpg') }}">
  </figure>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<!-- Start popular-destination Area -->
<section class="popular-destination-area  visible-md visible-lg">
  <div class="container">
    <h1 class="text-center h" style="text-align: center;padding-bottom:2%">
    Best Tour Packages
    </h1>
    <div class="row">
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/singapore.jpg') }}" alt=""width="100%" height="100%">
        <p>Singapore</p>
      </div>
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/malaysia.jpg') }}" alt=""width="100%" height="100%">
        <p>Malaysia</p>
      </div>
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/thailand.jpg') }}" alt=""width="100%" height="100%">
        <p>Thailand</p>
      </div>
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/nyc_usa.jpg') }}" alt=""width="100%" height="100%">
        <p>New York</p>
      </div>
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/hongkong.jpg') }}" alt=""width="100%" height="100%">
        <p>Hongkong</p>
      </div>
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/china.jpg') }}" alt=""width="100%" height="100%">
        <p>China</p>
      </div>
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/austalia.jpg') }}" alt=""width="100%" height="100%">
        <p>Austalia</p>
      </div>
      <div class="col-lg-3 col-xs-3 onhover">
        <img class="cruis" src="{{ url('img/newzealand.jpg') }}" alt=""width="100%" height="100%">
        <p>Newzealand</p>
      </div>
    </div>
  </div>
</section>
<!--popular destination small-->
<section class="popular-destination-area section-gap-small2 visible-ms visible-xs ">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10 h" style="">Best Tour Packages</h1>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top:-10%">
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/singapore.jpg') }}" alt=""width="100%" height="100%">
        <p>Singapore</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/malaysia.jpg') }}" alt=""width="100%" height="100%">
        <p>Malaysia</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/thailand.jpg') }}" alt=""width="100%" height="100%">
        <p>Thailand</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/nyc_usa.jpg') }}" alt=""width="100%" height="100%">
        <p>New York</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/hongkong.jpg') }}" alt=""width="100%" height="100%">
        <p>Hongkong</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/china.jpg') }}" alt=""width="100%" height="100%">
        <p>China</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/austalia.jpg') }}" alt=""width="100%" height="100%">
        <p>Austalia</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/newzealand.jpg') }}" alt=""width="100%" height="100%">
        <p>Newzealand</p>
      </div>
    </div>
  </div>
</section>
<div class="container section-gap visible-md visible-lg" style="margin-top:-6%;padding-bottom:3%">
  <h1 class="text-center h" style="padding-bottom:3%">
  Amazing Packages
  </h1>
   <div class="row">
    @foreach($trending as $trend)
    @if(!empty($trend->image->image_name))
    @if($trend->trending=='yes')
     
    <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
      <div class="container11" onclick="window.location.href = '{{ url("/package/".$trend->id."/".@$trend->multicatagory->CatagoryData->category) }}';">
        <a href = "{{ url('/package/'.$trend->id."/".@$trend->multicatagory->CatagoryData->category) }}">
        <img src="{{ url($trend->image->image_name) }}"  alt="" class="image">
        <div class="overlay1">
            <h6 class="h7">{{ @$trend->packagename }}</h6>
          <p class="pric">₹ {{ @$trend->cost }}</p>
        </div>
        </a>
        
      </div>
      
    </div>
    @endif
    @endif
    @endforeach
  </div>

  <br><br><br><br>
  <div class="row" style="margin-top:-10%">
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/singapore.jpg') }}" alt=""width="100%" height="100%">
        <p>Singapore</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/malaysia.jpg') }}" alt=""width="100%" height="100%">
        <p>Malaysia</p>
      </div>
    </div>

</div>
<div class="container section-gap-small2 visible-xs visible-ms" style="margin-top:1%;padding-bottom:3%">
  <h1 class="text-center h" style="padding-bottom:2%">
  Amazing Packages
  </h1>
 <div class="row">
    @foreach($trending as $trend)
    
    @if(!empty($trend->image->image_name))
    @if($trend->trending=='yes')
     
    <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
     
      <div class="container11" onclick="window.location.href = '{{ url('/package/'.$trend->id.'/'.@$trend->multicatagory->CatagoryData->category) }}';">
        
        <img src="{{ url($trend->image->image_name) }}" alt="" class="image">
        <div class="overlay1">
            <h6 class="h7">{{ @$trend->packagename }}</h6>
          <p class="pric">₹ {{ @$trend->cost }}</p>
        </div>
        
      </div>
      
    </div>
    @endif
    @endif
    @endforeach
  </div>
  
  <br><br>
  <div class="row" style="margin-top:-10%">
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/singapore.jpg') }}" alt=""width="100%" height="100%">
        <p>Singapore</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/malaysia.jpg') }}" alt=""width="100%" height="100%">
        <p>Malaysia</p>
      </div>
    </div>
</div>

<!-- Destination--> 
<div class="container section-gap visible-md visible-lg" style="margin-top:-10%;padding-bottom:1%">
  <h1 class="text-center h" style="padding-bottom:2%">
  Popular Destination
  </h1>
    <div class="row">
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/singapore.jpg') }}" alt=""width="100%" height="100%">
        <p>Singapore</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/malaysia.jpg') }}" alt=""width="100%" height="100%">
        <p>Malaysia</p>
      </div>
    </div>
</div>
<div class="container section-gap-small2 visible-xs visible-ms" style="margin-top:1%;padding-bottom:15%">
  <h1 class="text-center h" style="padding-bottom:2%">
  Popular Destination
  </h1>
    <div class="row">
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/singapore.jpg') }}" alt=""width="100%" height="100%">
        <p>Singapore</p>
      </div>
      <div class="col-6 onhover_sm">
        <img class="cruis" src="{{ url('img/malaysia.jpg') }}" alt=""width="100%" height="100%">
        <p>Malaysia</p>
      </div>
    </div>
</div>

<!-- Agents-->
<section class="ftco-section testimony-section visible-md visible-lg" style="margin-top: -1%">
  <div class="container">
    <div class="row justify-content-center mb10 pb5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <div class="h">Amazing Tour Packages</div>
      </div>
    </div>
    <div class="row ftco-animate" >
      <div class="carousel owl-carousel ftco-ow">
        <div class="item text-center">
          <div class="testimony-wrap1 p-4 pb-5 b1">
            <img  class="img-fluid-logo" src="{{ url('img/l1.png') }}" >
            <div class="single-other-issue">
              <div class="thumb relative ">
                <img class="img-fluid" src="{{ url('img/a1.jpg') }}" alt="">
              </div></div>
              <div class="text">
                <p class="mb-5">It is a river cruise company owned by the globus family of brands. The company became a member of cruise lines international association in august 2009.</p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l2.png') }}" >
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a2.jpg') }}" alt="">
                </div>
              </div>
              <div class="text">
                <p class="mb-5">Cosmos lite vacation packages include city to city transportation, comfortable hotels. with a range of mycosmos excursion, you have the opinion to purchase only the tours and activities that strike your fancy.</p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l3.png') }}">
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a3.jpg') }}" alt="">
                </div>
              </div>
              <div class="text">
                <p class="mb-5">Genting Hongkong brings you the dream cruise, the first ever Asian luxury cruise line. Genting dream cruise with the total length 333 meters and 150000-ton vessel provides, 1674 cabins able to carry 3352 guests and 2000 crew members.</p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l4.png') }}" >
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a4.jpg') }}" alt="">
                </div>
              </div>
              <div class="text">
                <p class="mb-5">The globus family of brands has been providing a variety of vacations that address the needs of today’s diverse traveller with unparalleled vacation experiences, full of discovery and insight.</p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l5.png') }}" >
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a5.jpg') }}" alt="">
                </div>
              </div>
              <div class="text">
                <p class="mb-5">
                  Norwegian cruise line is a cruise line founded in 1966 and based  in the united states. It is the third-largest cruise line in the world.
                </p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l6.png') }}" >
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a1.jpg') }}" alt="">
                </div>
              </div>
              <div class="text">
                <p class="mb-5">It is a cruise line owned by Carnival corporation & pic. The company is incorporated in Bermuda and its head quaters are in santa clarita, California. </p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l7.png') }}" >
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a2.jpg') }}" alt="">
                </div>
              </div>
              <div class="text">
                <p class="mb-5">
                  Rail Europe is a north American distributor of European rail products, representing over 50 railroads throught out  Europe.
                </p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l8.png') }}" >
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a3.jpg') }}" alt="">
                </div>
              </div>
              <div class="text">
                <p class="mb-5">
                  Royal carribean international is a cruise line brand founded in Norway and based in Miami, florida, united states.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- agents small-->
  <section class="ftco-section testimony-section visible-ms visible-xs" style="margin-top: -16%">
    <div class="container">
      <div class="row justify-content-center mb-3 pb-1">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <div style="" class="h">Amazing Tour Packages</div>
        </div>
      </div>
      <div class="row ftco-animate" style="margin-top: -10%"  >
        <div class="carousel owl-carousel ftco-ow">
          <div class="item text-center">
            <div class="testimony-wrap1 p-4 pb-5 b1">
              <img  class="img-fluid-logo" src="{{ url('img/l1.png') }}" >
              <div class="single-other-issue">
                <div class="thumb relative ">
                  <img class="img-fluid" src="{{ url('img/a1.jpg') }}" alt="">
                </div></div>
                <div class="text">
                  <p class="mb-5">It is a river cruise company owned by the globus family of brands. The company became a member of cruise lines international association in august 2009.</p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap1 p-4 pb-5 b1">
                <img  class="img-fluid-logo" src="{{ url('img/l2.png') }}" >
                <div class="single-other-issue">
                  <div class="thumb relative ">
                    <img class="img-fluid" src="{{ url('img/a2.jpg') }}" alt="">
                  </div>
                </div>
                <div class="text">
                  <p class="mb-5">Cosmos lite vacation packages include city to city transportation, comfortable hotels. with a range of mycosmos excursion, you have the opinion to purchase only the tours and activities that strike your fancy.</p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap1 p-4 pb-5 b1">
                <img  class="img-fluid-logo" src="{{ url('img/l3.png') }}">
                <div class="single-other-issue">
                  <div class="thumb relative ">
                    <img class="img-fluid" src="{{ url('img/a3.jpg') }}" alt="">
                  </div>
                </div>
                <div class="text">
                  <p class="mb-5">Genting Hongkong brings you the dream cruise, the first ever Asian luxury cruise line. Genting dream cruise with the total length 333 meters and 150000-ton vessel provides, 1674 cabins able to carry 3352 guests and 2000 crew members</p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap1 p-4 pb-5 b1">
                <img  class="img-fluid-logo" src="{{ url('img/l4.png') }}" >
                <div class="single-other-issue">
                  <div class="thumb relative ">
                    <img class="img-fluid" src="{{ url('img/a4.jpg') }}" alt="">
                  </div>
                </div>
                <div class="text">
                  <p class="mb-5">The globus family of brands has been providing a variety of vacations that address the needs of today’s diverse traveller with unparalleled vacation experiences, full of discovery and insight.</p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap1 p-4 pb-5 b1">
                <img  class="img-fluid-logo" src="{{ url('img/l5.png') }}" >
                <div class="single-other-issue">
                  <div class="thumb relative ">
                    <img class="img-fluid" src="{{ url('img/a5.jpg') }}" alt="">
                  </div>
                </div>
                <div class="text">
                  <p class="mb-5">
                    Norwegian cruise line is a cruise line founded in 1966 and based  in the united states. It is the third-largest cruise line in the world.
                  </p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap1 p-4 pb-5 b1">
                <img  class="img-fluid-logo" src="{{ url('img/l6.png') }}" >
                <div class="single-other-issue">
                  <div class="thumb relative ">
                    <img class="img-fluid" src="{{ url('img/a1.jpg') }}" alt="">
                  </div>
                </div>
                <div class="text">
                  <p class="mb-5">It is a cruise line owned by Carnival corporation & pic. The company is incorporated in Bermuda and its head quaters are in santa clarita, California. </p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap1 p-4 pb-5 b1">
                <img  class="img-fluid-logo" src="{{ url('img/l7.png') }}" >
                <div class="single-other-issue">
                  <div class="thumb relative ">
                    <img class="img-fluid" src="{{ url('img/a2.jpg') }}" alt="">
                  </div>
                </div>
                <div class="text">
                  <p class="mb-5">
                    Rail Europe is a north American distributor of European rail products, representing over 50 railroads throught out  Europe.
                  </p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap1 p-4 pb-5 b1">
                <img  class="img-fluid-logo" src="{{ url('img/l8.png') }}" >
                <div class="single-other-issue">
                  <div class="thumb relative ">
                    <img class="img-fluid" src="{{ url('img/a3.jpg') }}" alt="">
                  </div>
                </div>
                <div class="text">
                  <p class="mb-5">
                    Royal carribean international is a cruise line brand founded in Norway and based in Miami, florida, united states.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Milestones -->
    <section>      
      <div class="milestones visible-lg visible-md">
         <div class="col text-center container">            
            <div class="row">               
               <div class="col-lg-3 milestone_col">
                  <div class="milestone text-center">
                     <div class="milestone_icon"><img src="img/earth-globe.svg" alt=""></div>
                     <div class="milestone_counter" data-end-value="5000">0</div>
                     <div class="milestone_text">Total Customers</div>
                  </div>
               </div>               
               <div class="col-lg-3 milestone_col">
                  <div class="milestone text-center">
                     <div class="milestone_icon"><img src="img/cabin.svg" alt=""></div>
                     <div class="milestone_counter" data-end-value="50">0</div>
                     <div class="milestone_text">Destination Reached</div>
                  </div>
               </div>               
               <div class="col-lg-3 milestone_col">
                  <div class="milestone text-center">
                     <div class="milestone_icon"><img src="img/photographer-man.svg" alt=""></div>
                     <div class="milestone_counter" data-end-value="50">0</div>
                     <div class="milestone_text">Tour Packages</div>
                  </div>
               </div>               
               <div class="col-lg-3 milestone_col">
                  <div class="milestone text-center">
                     <div class="milestone_icon"><img src="img/airplane-flight-in-circle-around-earth.svg" alt=""></div>
                     <div class="milestone_counter" data-end-value="2018">0</div>
                     <div class="milestone_text">Established Since</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="smilestones visible-xs visible-ms">
         <div class="container text-center">
            <div class="h"></div>
            <div class="row">
               <div class="col-lg-6">
                  <div class=" "style="position: relative;float: left; margin-left: 15%">
                     <div class="smilestone_icon"><img src="img/earth-globe.svg" alt=""></div>
                     <div class="milestone_counter " style="font-size: 30px;" data-end-value="5000">0</div>
                     <div class="smilestone_text">Total Customers</div>
                  </div>
                  <div class=" " style="position: relative;float: right; margin-right: 15%">
                     <div class="smilestone_icon"><img src="img/cabin.svg" alt=""></div>
                     <div class="milestone_counter"style="font-size: 30px;" data-end-value="50">0</div>
                     <div class="smilestone_text">Destination Reached</div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class=" " style="position: relative;float: left;margin-left: 15%">
                     <div class="smilestone_icon"><img src="img/photographer-man.svg" alt=""></div>
                     <div class="milestone_counter" style="font-size: 30px;" data-end-value="50">0</div>
                     <div class="smilestone_text">Tour Packages</div>
                  </div>
                  <div class="" style="position: relative;float: right; margin-right: 15%">
                     <div class="smilestone_icon"><img src="img/airplane-flight-in-circle-around-earth.svg" alt=""></div>
                     <div class="milestone_counter" style="font-size: 30px;" data-end-value="2018">0</div>
                     <div class="smilestone_text">Established Since</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>
    @endsection
    @section('bottomscriptfiles')
    <script src="{{ url('js1/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ url('js1/superfish.min.js') }}"></script>
    <script src="{{ url('js1/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js1/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js1/main.js') }}"></script>
    <script src="{{ url('js1/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('js1/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ url('js1/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js1/js/aos.js') }}"></script>
    <script src="{{ url('js1/js/main.js') }}"></script>
    <script src="{{ url('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script>
    /* user defined variables */
    var timeOnSlide = 3,
    // the time each image will remain static on the screen, measured in seconds
    timeBetweenSlides = 1,
    // the time taken to transition between images, measured in seconds
    // test if the browser supports animation, and if it needs a vendor prefix to do so
    animationstring = 'animation',
    animation = false,
    keyframeprefix = '',
    domPrefixes = 'Webkit Moz O Khtml'.split(' '),
    // array of possible vendor prefixes
    pfx  = '',
    slidy = document.getElementById("slidy");
    if (slidy.style.animationName !== undefined) { animation = true; }
    // browser supports keyframe animation w/o prefixes
    if( animation === false ) {
    for( var i = 0; i < domPrefixes.length; i++ ) {
    if( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
    pfx = domPrefixes[ i ];
    animationstring = pfx + 'Animation';
    keyframeprefix = '-' + pfx.toLowerCase() + '-';
    animation = true;
    break;
    }
    }
    }
    if( animation === false ) {
    // animate in JavaScript fallback
    } else {
    var images = slidy.getElementsByTagName("img"),
    firstImg = images[0],
    // get the first image inside the "slidy" element.
    imgWrap = firstImg.cloneNode(false);  // copy it.
    slidy.appendChild(imgWrap); // add the clone to the end of the images
    var imgCount = images.length, // count the number of images in the slide, including the new cloned element
    totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
    slideRatio = (timeOnSlide / totalTime)*100, // determine the percentage of time an induvidual image is held static during the animation
    moveRatio = (timeBetweenSlides / totalTime)*100, // determine the percentage of time for an individual movement
    basePercentage = 100/imgCount, // work out how wide each image should be in the slidy, as a percentage.
    position = 0, // set the initial position of the slidy element
    css = document.createElement("style"); // start marking a new style sheet
    css.type = "text/css";
    css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; // set the width for the slidy container
    css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }\n";
    css.innerHTML += "@"+keyframeprefix+"keyframes slidy {\n";
    for (i=0;i<(imgCount-1); i++) { //
    position+= slideRatio; // make the keyframe the position of the image
    css.innerHTML += position+"% { left: -"+(i * 100)+"%; }\n";
    position += moveRatio; // make the postion for the _next_ slide
    css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }\n";
    }
    css.innerHTML += "}\n";
    css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }\n"; // call on the completed keyframe animation sequence
    document.body.appendChild(css); // add the new stylesheet to the end of the document
    }
    </script>
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
    </body>
    </html> 
@endsection

    @section('topscriptfiles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cs.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ url('css/mainstyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('js1/modernizr.custom.86080.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/about.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    #slidy-container {
    width: 100%; overflow: hidden; margin: 0 auto;
    }
    .tcard {
    background-color: #fff;
    max-width: 70%;
    min-height: 40%;
    display: flex;
    overflow-x: auto;
    color-background: white;
    margin-left: 15%;
    /* margin-right: 15%;*/
    }
    .tcard--content {
    background-color: white;
    min-width: 350px;
    margin: 5px;
    margin-right: 20px;
    margin-left: 20px;
    }
    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 300px;
    margin-left: 40%;
    height: auto;
    }
    .container1 {
    padding: 2px 16px;
    }
    .pp{
    font-family: "Oswald";
    font-size: 36px;
    line-height:29.25;
    font-weight: 300;
    color: rgb(24, 24, 24);
    }
    .pp1{
    font-family: "Oswald";
    font-size: 22px;line-height: 16px;font-weight: 400;
    color: white;
    }
    .text p{
    font-size: 12px;
    }
    .b1{
    max-height: 500px;
    }
    .container11 {
    position: relative;
    width: 100%;
    padding-left:0%;
    padding-top: 5%;
    }
    .image {
    display: block;
    width: 100%;
    height: auto;
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
    padding: 1px;
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
    font-weight: 300;  }
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
    .desc p{
    color: white;
    font-weight: 900;
    }
    .img-fluid-s{
    max-width: 123px;
    max-height: auto;
    }
    .s{
    font-size: 10px;
    color: white;
    }
    .st{
    margin-right: 21px;
    margin-left: 5px;
    }
    .pt{
    padding-top: 5px;
    padding-bottom: 5px;
    margin-left: 10%;
    margin-right: -15%;
    }
    .btn{
    position: relative;
    font-size: 10px;
    text-decoration-color:transparent;
    color: white;
    background-color: black;
    margin-left: 27%;
    margin-top: -75%;
    }
    .place{
    position: absolute;
    font-size: 12px;
    color: white;
    margin-left: 15%;
    margin-top: -39%;
    margin-right: auto;
    }
    .place1{
    position: absolute;
    font-size: 12px;
    color: white;
    margin-left: 23%;
    margin-top: -39%;
    margin-right: auto;
    }
    .palce-name{
    position: absolute;
    font-size: 11px;
    color: white;
    margin-left: 17%;
    margin-top: -24%;
    margin-right: auto;
    }
    .palce-name1{
    position: absolute;
    font-size: 11px;
    color: white;
    margin-left: 33%;
    margin-top: -29%;
    margin-right: auto;
    }



/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
    </style>
    @endsection
