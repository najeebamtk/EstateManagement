@extends ("layout.master")
@section ('style')
<style>
  #first {
    font-size: 50px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-style: oblique;
    font-weight: bold;
    margin-left: 50px;
  }

  #two {
    font-size: 40px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-style: oblique;
    font-weight: bold;
    margin-left: 50px;
  }

  .card {

    max-width: 300px;
    font-family: arial;
    border-color: blue;
    border-width: 4px;
    text-align: center;

  }

  .container a {
    text-decoration: none;
    font-size: 22px;
    color: black;
    text-align: center;
  }

  .title-1 h3 {
    border-bottom: solid 4px blue;
  }
  .form-control.text-danger
 {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem)!important;
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e);
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
</style>
@endsection
@section ("content")

<div class="container">
  <div class="mt-5">
    <h1 id="first">{{$property->name}}</h1>
    <h2 id="two">{{$property->location}}, {{$property->address}}</h2>
  </div>
  <div class="row mt-5">
    <div class="col-lg-8 m-auto">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="/storage/profile/{{$property->image1}}" style="height:550px" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/storage/profile/{{$property->image2}}" style="height:550px" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-6 mt-5">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title mb-5">{{$property->price}}  Rupees</h2>
          <h3 class="card-subtitle mb-5 text-muted">{{$property->status}}</h3>
          <p>{{$property->type}}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mt-5">
      <div>
        <h2>Property Description</h2>
        <p>
        {{$property->description}}.
        All the facilities are available in lowest price .Every thing
          is available!.Real Estate Listings and real estate property owners are more complex and more critical to the success of real estate listing agents.

        </p>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-6">
      <div class="mb-4">
        <h2><strong>Quick Summary</strong></h2>
      </div>

      <div class="summary-list">
        <ul class="list">
        <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-calendar" aria-hidden="true"></i>
  Property Added Date:</strong>
            <span>{{$property->created_at}}</span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-id-card-o" aria-hidden="true"></i>
 Property ID:</strong>
            <span>{{$property->id}}</span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-map-marker" aria-hidden="true"></i> Location:</strong>
            <span>{{$property->location}},{{$property->address}}</span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-building-o" aria-hidden="true"></i>
 Property Type:</strong>
            <span>{{$property->type}}</span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-renren" aria-hidden="true"></i>
 Status:</strong>
            <span>{{$property->status}}</span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-area-chart" aria-hidden="true"></i>
 Area:</strong>
            <span>{{$property->area}}
              <sup>2</sup>
            </span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-bed" aria-hidden="true"></i>
 Beds:</strong>
            <span>{{$property->beds}}</span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-bath" aria-hidden="true"></i>
 Baths:</strong>
            <span>{{$property->baths}}</span>
          </li>
          <li class="d-flex justify-content-between mb-3">
            <strong><i class="fa fa-car" aria-hidden="true"></i>
  Garage:</strong>
            <span>{{$property->garages}}</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-lg-6 pl-5">
      <h2><i class="fa fa-book" aria-hidden="true"></i>  Amenities</h2>
      <div class="amenities-list color-text-a">
        <ul class="list-a no-margin">
          @foreach ($property->amenities as $amenity)
          <li>{{$amenity}}</li>
       @endforeach
        </ul>
      </div>

    </div>
  </div>
  <div class="row mt-5">
    <div class="title-1">
      <h3>Vedio</h3>
    </div>
    <div class="col-lg-10 mt-5">
      <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
    </div>

  </div>
  <div class="mt-5">
    <h3>Contact Agent</h3>
  </div>

  <div class="row">


    <div class="col-lg-6 mt-5">
      <img src="/storage/profile/{{$property->image}}" style="width: 300px;;" alt="">
    </div>
    <div class="col-lg-6 mt-5">
      <div class="agent1">
        <h3><strong> {{$property->fname}}</strong></h3>
        <p class="mt-3">{{$property->description}}</p>
        <ul class="list-unstyled">
          <li class="d-flex justify-content-between mb-3">
            <strong>Phone:</strong>
            <span class="color-text-a">+91  {{$property->phone}}</span>
          </li>
          <li class="d-flex justify-content-between  mb-3">
            <strong>Created Date:</strong>
            <span class="color-text-a">{{$property->date}}</span>
          </li>
          <li class="d-flex justify-content-between  mb-3">
            <strong>Email:</strong>
            <span class="color-text-a">{{$property->email}}</span>
          </li>
          <li class="d-flex justify-content-between  mb-3">
            <strong>Skype:</strong>
            <span class="color-text-a">{{$property->skype}}</span>
          </li>
        </ul>
      </div>
      <div style="margin: 24px 0; text-align:center">
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
      </div>

    </div>
  </div>

  <div class="row-mt-5">
    <div class="col-lg-6  mt-5">

      <form method="post" action="{{url('propertysingle/postmessage')}}/{{$property->id}}" id="commentform">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="your name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="email">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Comment</label>
          <textarea class="form-control" id="comment" name="comment" rows="5"></textarea>
        </div>
        <input type="hidden" name="agentid" value="{{$property->agentid}}">
        <button type="submit" class="btn btn-primary mb-5" id="button" style="text-align:center;">Send Message
        </button>

      </form>
    </div>
    <div class="col-lg-6">

    </div>
  </div>
</div>
@endsection


@section('script')

<script src="{{asset('js/jquery.validate.js')}}"></script>
<script>
  $().ready(function() {
    $("#commentform").validate({
      errorClass: 'text-danger',
      errorElementClass: 'input-validation-error',
      rules: {
        name: "required",
        email: {
          required: true,
          email: true
        },
        comment: {
          required: true,
          minlength: 4
        }
      },
      messages: {
        name: "please enter  your name",
        email: {
          required: "please enter your email",
          email: "enter valid email"
        },
        comment: {
          required: "enter your valuable comment",
          minlength: "enter atleast 4 character long message"
        }
      }

    });
  })
</script>
@endsection