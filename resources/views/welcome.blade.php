@extends ("layout.master")
@section ("content")

<div class="row">
  <div class="col-lg-12">

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4" style="color:red;align:center">Estate Agency</h1>
        <p class="lead">Let's discover the real world of luxury
          <br>
          We provides hundreads of luxury apartments and rooms.Come!!
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('images/1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/building.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://assets.bosch.com/media/global/contact/bosch-contact.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>
</div>


<section class="services pt-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-header text-center">
          <p class="mb-0">Discover</p>
          <h2 class="section-title">Common Features</h2>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
          <div class="icon">
            <i class="fa fa-bed"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Full Furnished</a></h3>
            <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
          <div class="icon">
            <i class="fa fa-paint-brush"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Royal Touch Paint</a></h3>
            <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight animated" data-wow-delay="0.6s" style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
          <div class="icon">
            <i class="fa fa-picture-o"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Letest Interior Design</a></h3>
            <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight animated" data-wow-delay="0.8s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
          <div class="icon">
            <i class="fa fa-shield"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Non Stop Security</a></h3>
            <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
          <div class="icon">
            <i class="fa fa-leaf"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Living Inside a Nature</a></h3>
            <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
          <div class="icon">
            <i class="fa fa-home"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Luxurious Fittings</a></h3>
            <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







<section id="portfolio-section" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-header text-center">
          <p>Discover</p>
          <h2 class="section-title">Our Gallery</h2>
        </div>
      </div>
      <div class="col-12">

        <div class="controls text-center">
          <a class="filter btn btn-common active" data-filter="all">
            All
          </a>
        </div>

      </div>
    </div>
    <div id="portfolio" class="row wow fadeInDown animated" style="visibility: visible;">
      @foreach($images as $image)
      <div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
        <div class="portfolio-box">
          <div class="img-thumb">
            <img class="img-fluid" src="/storage/profile/{{$image->image}}" alt="">
          </div>
          <div class="overlay-box text-center">
            <a class="lightbox" data-lightbox-gallery="myGallery" href="/storage/profile/{{$image->image}}">
              <i class="fa fa-search-plus"></i>
            </a>
            <h3>{{$image->name}}</h3>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</section id="property-section" class="section-padding">
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-header text-center">
          <p>Discover</p>
          <h2 class="section-title">Our Amazing Properties</h2>
        </div>
      </div>
      <div class="col-12">

        <div class="controls text-center">
          <a class="filter btn btn-common active" data-filter="all">
            All
          </a>
        </div>
      </div>
    </div>
    <div class="row">

    @foreach($propertys as $property)
        <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="/storage/profile/{{$property->image1}} " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h3 class="card-title"><i class="fa fa-building" aria-hidden="true"></i> {{$property->name}}</h3>
                        <h4 class="card-title"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$property->location}}</h4>
                        <div class="tag price"><i class="fa fa-money" aria-hidden="true"></i> {{$property->price}} Rupees </div>
                        <p class="card-text"> Status: {{$property->status}}</p>

                        <a href="{{url('propertysingle')}}/{{$property->id}}" class="btn btn-primary">Click to View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
        </div>


<section>

</section>




<section class="counter-section section-padding" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="counterUp">6252</div>
          <p>Happy Customers</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="fa fa-building"></i></div>
          <div class="counterUp">3091</div>
          <p>Completed Projects</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="fa fa-key"></i></div>
          <div class="counterUp">1200</div>
          <p>Property Sold</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="fa fa-trophy"></i></div>
          <div class="counterUp">79</div>
          <p>Awards Win</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="testimonial">
  <h2>Testimonials</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="img-box"><img src="{{asset('images/agent1.jfif')}}" alt=""></div>
        <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
        <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
      </div>
      <div class="carousel-item">
        <div class="img-box"><img src="{{asset('images/agent1.jfif')}}" alt=""></div>
        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
        <p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
      </div>
      <div class="carousel-item">
        <div class="img-box"><img src="{{asset('images/agent1.jfif')}}" alt=""></div>
        <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
        <p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <i class="fa fa-angle-right"></i>
    </a>
  </div>
</div>
















  @endsection

  @section('style')
  <style>
    .testimonial {
      background: url(https://i.ibb.co/PTJDkgb/testimonials.jpg);
      font-family: "Open Sans", sans-serif;
    }

    .testimonial h2 {
      color: #e31818;
      text-align: center;
      text-transform: uppercase;
      font-family: "Roboto", sans-serif;
      font-weight: bold;
      position: relative;
      margin: 25px 0 50px;
    }

    .testimonial h2::after {
      content: "";
      width: 100px;
      position: absolute;
      margin: 0 auto;
      height: 3px;
      background: #ffdc12;
      left: 0;
      right: 0;
      bottom: -10px;
    }

    .testimonial .carousel {
      width: 68%;
      margin: 0 auto;
      padding-bottom: 50px;
    }

    .testimonial .carousel .carousel-item {
      color: #9a9a9e;
      font-size: 18px;
      text-align: center;
      overflow: hidden;
      min-height: 340px;
    }

    .testimonial .carousel .carousel-item a {
      color: #eb7245;
    }

    .testimonial .carousel .img-box {
      width: 180px;
      height: 180px;
      margin: 0 auto;
      border-radius: 50%;
    }

    .testimonial .carousel .img-box img {
      width: 100%;
      height: 100%;
      display: block;
      border-radius: 50%;
    }

    .testimonial .carousel .testimonial {
      padding: 30px 0 10px;
    }

    .testimonial .carousel .overview {
      text-align: center;
      padding-bottom: 5px;
    }

    .testimonial .carousel .overview b {
      color: #df4d4d;
      font-size: 15px;
      text-transform: uppercase;
      display: block;
      padding-bottom: 5px;
    }

    .testimonial .carousel .star-rating i {
      font-size: 18px;
      color: #ffdc12;
    }

    .testimonial .carousel-control-prev,
    .carousel-control-next {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: #999;
      text-shadow: none;
      top: 4px;
    }

    .testimonial .carousel-control-prev i,
    .carousel-control-next i {
      font-size: 20px;
      margin-right: 2px;
    }

    .testimonial .carousel-control-prev {
      left: auto;
      right: 40px;
    }

    .testimonial .carousel-control-next i {
      margin-right: -2px;
    }

    .testimonial .carousel .carousel-indicators {
      bottom: 15px;
    }

    .testimonial .carousel-indicators li,
    .carousel-indicators li.active {
      width: 11px;
      height: 11px;
      margin: 1px 5px;
      border-radius: 50%;
    }

    .testimonial .carousel-indicators li {
      background: #e2e2e2;
      border: none;
    }

    .testimonial .carousel-indicators li.active {
      background: #888;
    }

    /* Services Item */
    .services {
      background: #fafafa;
    }

    .counter-section {
      background: url({{asset('images/counter.jpg')}});
    overflow: hidden;
    position: relative;
    background-size: cover;
    }

    .section-padding {
      padding: 60px 0;
      background-position-y: 80%;

    }

    .services-item {
      padding: 20px;
      background: #fff;
      border-radius: 4px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      margin-bottom: 15px;
      margin-top: 15px;
      position: relative;
      transition: all 0.3s ease-in-out 0s;
      -moz-transition: all 0.3s ease-in-out 0s;
      -webkit-transition: all 0.3s ease-in-out 0s;
      -o-transition: all 0.3s ease-in-out 0s;
    }

    .services-item .icon {
      float: left;
      padding-right: 15px;
    }

    .services-item .icon i {
      width: 50px;
      height: 50px;
      display: inline-block;
      line-height: 50px;
      font-size: 36px;
      text-align: center;
      margin-bottom: 30px;
      color: #4064d7;
      border-radius: 50%;
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
      transition: all 0.3s ease-in-out 0s;
      -moz-transition: all 0.3s ease-in-out 0s;
      -webkit-transition: all 0.3s ease-in-out 0s;
      -o-transition: all 0.3s ease-in-out 0s;
    }

    .services-item .services-content {
      padding-left: 65px;
    }

    .services-item .services-content h3 {
      margin-bottom: 10px;
      font-size: 18px;
      font-weight: 500;
    }

    .services-item .services-content h3 a {
      color: #272727;
    }

    .services-item .services-content h3 a:hover {
      color: #4064d7;
    }

    .services-item:hover {
      box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
    }

    .services-item:hover .icon i {
      background: transparent;
      -webkit-transform: scale(1.1);
      -moz-transform: scale(1.1);
      -ms-transform: scale(1.1);
      -o-transform: scale(1.1);
      transform: scale(1.1);
    }

    .section-title {
      font-size: 36px;
      color: #272727;
      line-height: 52px;
      padding-top: 15px;
      font-weight: 700;
      text-align: center;
      position: relative;
      margin: 0;
    }

    .section-title:before {
      background-color: #4064d7;
    }

    .section-title:before {
      position: absolute;
      content: '';
      height: 1px;
      width: 45px;
      left: 50%;
      top: 13px;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      background-color: #4064d7;
    }

    .section-title-header p {
      font-size: 18px;
      text: center;
      font-weight: 400;
      line-height: 26px;
    }

    .counter-section:before {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .counter-section .counter {
      padding: 30px 0;
    }

    .counter-section .counter .icon {
      margin-bottom: 30px;
    }

    .counter-section .counter .icon i {
      width: 70px;
      height: 70px;
      line-height: 70px;
      display: inline-block;
      text-align: center;
      background: #fff;
      border-radius: 50%;
      font-size: 36px;
      color: #4064d7;
    }

    .counter-section .counter p {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      font-weight: 400;
      margin: 30px 0;
    }

    .counter-section .counter .counterUp {
      color: #fff;
      font-size: 38px;
      margin-top: 15px;
      font-weight: 700;
    }

    .panel-default {
      border-radius: 4px;
      border: none;
      margin-bottom: 10px;
    }

    #portfolio-section {
      position: relative;
    }

    #portfolio-section .portfolio-box {
      position: relative;
    }

    #portfolio-section .portfolio-box .overlay-box {
      position: absolute;
      top: 0px;
      left: 0px;
      right: 0px;
      bottom: 0px;
      padding-top: 25%;
      opacity: 0;
      -webkit-transition: all 500ms ease;
      -moz-transition: all 500ms ease;
      -ms-transition: all 500ms ease;
      -o-transition: all 500ms ease;
      transition: all 500ms ease;
    }

    #portfolio-section .portfolio-box .overlay-box a {
      color: #ffffff;
      font-size: 16px;
      width: 50px;
      height: 50px;
      display: inline-block;
      line-height: 50px;
      background: #4064d7;
      border-radius: 50%;
      transform: scale(0, 0);
      -webkit-transform: scale(0, 0);
      -moz-transform: scale(0, 0);
      -ms-transform: scale(0, 0);
      -o-transform: scale(0, 0);
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
    }

    #portfolio-section .portfolio-box .overlay-box h3 {
      margin-top: 20px;
      color: #fff;
      font-size: 22px;
      -webkit-transform: translateY(20px);
      -moz-transform: translateY(20px);
      transform: translateY(20px);
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
    }

    #portfolio-section .portfolio-box:hover .overlay-box {
      background: rgba(0, 0, 0, 0.85);
      transform: scale(1, 1);
      opacity: 1;
    }
    #portfolio-section .mix {
    padding: 18px;
}
    #portfolio-section .portfolio-box:hover .overlay-box h3 {
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      transform: translateY(0px);
    }

    #portfolio-section .portfolio-box:hover .overlay-box a {
      -webkit-transform: scale(1, 1);
      -moz-transform: scale(1, 1);
      -ms-transform: scale(1, 1);
      -o-transform: scale(1, 1);
    }
    .nivo-lightbox-overlay {
    position: fixed;
    top: 0;
    left: 0;
    background: #000000b8;
 
}
  </style>
  <link href="{{asset('css/nivo-lightbox.min.css')}}" rel="stylesheet" type="text/css">
  @endsection
  @section ('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{asset('js/nivo-lightbox.min.js')}}"></script>
<script>$(document).ready(function(){
  $('a').nivoLightbox();
});
</script>
@endsection
