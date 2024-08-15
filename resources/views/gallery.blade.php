@extends ("layout.master")
@section ('style')
<style>
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
    #portfolio-section .mix {
    padding: 19px;
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
@section("content")
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
          <a class="filter btn btn-common" data-filter="Living_Room">
            Living Room
          </a>
          <a class="filter btn btn-common" data-filter="Bed_Room">
            Bedroom
          </a>
          <a class="filter btn btn-common" data-filter="Kitchen">
            Kitchen
          </a>
        </div>

      </div>
    </div>
    <div id="portfolio" class="row wow fadeInDown animated" style="visibility: visible;">
     
    @foreach($images as $image)
      <div class="ccol-md-6 col-sm-6 col-lg-4 mix <?=str_replace(' ', '_', $image->type)?>" style="display: inline-block;" data-bound="">
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
</section>
@endsection

  @section ('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{asset('js/nivo-lightbox.min.js')}}"></script>
<script>$(document).ready(function(){
  $('a.lightbox').nivoLightbox();
});
$(document).ready(function(){
  $(".filter.btn.btn-common").click(function(){
    var value=$(this).attr('data-filter');
    if(value == "all"){
      $('#portfolio .mix').show('1000');

    }
    else{
      $("#portfolio .mix").not('.'+value).hide('3000');
        $('#portfolio .mix').filter('.'+value).show('3000');
    }

  });
  if ($(".filter.btn.btn-common").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});---

</script>
@endsection
