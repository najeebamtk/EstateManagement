<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .footer-area {
  background: #272727;
}

.footer-area .footer-titel {
  font-size: 18px;
  color: #fff;
  font-weight: 700;
  padding-bottom: 10px;
  letter-spacing: 0.5px;
}

.footer-area .footer-titel span {
  color: #ccc;
  font-weight: 400;
}

.footer-area .footer-link li {
  margin-bottom: 10px;
}

.footer-area .footer-link li a {
  color: #888;
  font-size: 14px;
  font-weight: 400;
  position: relative;
}

.footer-area .footer-link li a:before {
  background-color: white;
  content: "";
  height: 1px;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 100%;
  -webkit-transform: translateY(1px);
  transform: translateY(1px);
  -webkit-transition: 0.15s all cubic-bezier(0.39, 0.575, 0.565, 1);
  transition: 0.15s all cubic-bezier(0.39, 0.575, 0.565, 1);
  -webkit-transition-property: opacity, -webkit-transform;
  transition-property: opacity, -webkit-transform;
  transition-property: opacity, transform;
  transition-property: opacity, transform, -webkit-transform;
  width: 100%;
}

.footer-area .footer-link li a:hover {
  color: #fff;
}

.footer-area .footer-link li a:hover:before {
  opacity: 1;
  -webkit-transform: translateY(-3px) translateZ(0);
  transform: translateY(-3px) translateZ(0);
}

.footer-area .address li {
  margin-bottom: 20px;
}

.footer-area .address li a {
  color: #888;
  font-size: 14px;
  line-height: 30px;
  font-weight: 400;
}

.footer-area .address li a:hover {
  color: #fff;
}

.footer-area .address li a i {
  font-size: 22px;
  width: 32px;
  vertical-align: middle;
  height: 36px;
  text-align: center;
  display: inline-block;
  float: left;
  margin-right: 5px;
  line-height: 32px;
}

.footer-area #subscribe-form {
  margin-top: 10px;
}

.footer-area #subscribe-form .form-group {
  position: relative;
}

.footer-area #subscribe-form .form-group .btn-common {
  position: absolute;
  top: 0;
  right: 0;
  padding: 7px 15px;
  height: 52px;
  border-radius: 0;
  background: transparent;
  color: #4064d7;
}
.section-padding {
  padding: 60px 0;
}

.no-padding {
  padding: 0 !important;
}

.padding-left-none {
  padding-left: 0;
}

.padding-right-none {
  padding-right: 0;
}
</style>
@yield('style')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="yellow">


<div class="row">
  <div class="col-lg-12">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
<a class="navbar-brand text-brand" href="index.html">Estate<span class="color-b">Agency</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      
   
          <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('property')}}">Properties</a>
      </li>

     
      <li class="nav-item">
        <a class="nav-link" href="{{url('agents')}}">Agents</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('contact')}}">Contact</a>
      </li>


      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
         User Details
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('userprofile')}}">User Profile</a>
          <div class="dropdown-divider"></div>
          
         
          <a class="dropdown-item" href="">User Activity</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('user/logout')}}">Logout User</a>

        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
</div>
</div>

@yield('content')

<footer id="footer" class="footer-area section-padding">
<div class="container">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
<h3 class="footer-titel">Site Links</h3>
<ul class="footer-link">
<li><a href="#">Properties</a></li>

<li><a href="#">About</a></li>
<li><a href="#">Agents</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Gallery</a></li>
</ul>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
<h3 class="footer-titel">Usefull<span> Links</span></h3>
<ul class="footer-link">
<li><a href="#">Vadayam,Vadakara</a></li>
<li><a href="#">Poonoor,Calicut</a></li>
<li><a href="#">Vayalada,Kuttiady</a></li>
<li><a href="#">Palazhi,Calicut</a></li>
</ul>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
<h3 class="footer-titel">Contact <span>Info</span></h3>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i>Estate Agency<br> View, Hilite Mall</a>
</li>
<li>
<a href="#"><i class="lni-phone-handset"></i> +0495 2577781</a>
</li>
<li>
<a href="#"><i class="lni-envelope"></i> estate@gmail.com</a>
</li>
</ul>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
<h3 class="footer-titel">Subscribe <span>on Our News</span></h3>
<form method="post" id="subscribe-form" name="subscribe-form" class="validate">
<div class="form-group is-empty">
<input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">
<button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-envelope"></i></button>
<div class="clearfix"></div>
</div>
</form>
<div class="social-icon">
<a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
<a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
<a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
<a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
</div>
</div>
</div>
</div>
</div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    @yield("script")
</body>
</html>