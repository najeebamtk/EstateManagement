<!DOCTYPE html>
<html lang="en">
<head>

@yield('style')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="row">
<div class="col-lg-4 col-md-5 col-xs-12">
<div class="user-profile-box">

<div class="header clearfix">
<h2>{{$agentdata->fname}}</h2>
<h4>Real Estate Agent</h4>
<img src="/storage/profile/{{$agentdata->image}}" alt="avatar" class="img-fluid profile-img">
</div>

<div class="detail clearfix">
<ul>
<li>
<a class="active" href="{{url('agent')}}">
<i class="fa fa-files-o"></i> Dashboard
</a>
</li>
<li>
<a href="{{url('agent/profile')}}">
<i class="fa fa-user"></i>Profile
</a>
</li>
<li>
 <a href="{{url('agent/myproperty')}}">
<i class="fa fa-home"></i>My Properties
</a>
</li>

<li>
<a href="{{url('ag/new')}}">
<i class="fa fa-plus"></i>Submit New Property
</a>
</li>
<li>
<a href="{{url('agent/submitimages')}}">
<i class="fa fa-image"></i>Submit Images
</a>
</li>
<li>
<a href="{{url('agent/changepassword')}}">
<i class="fa fa-lock"></i>Change Password
</a>
</li>
<li>
<a href="{{url('agent/logout')}}">
<i class="fa fa-sign-out"></i>Log Out
</a>
</li>
</ul>
</div>
</div>
</div>
@yield('content')
</div>


@yield("script")

</body>
</html>
