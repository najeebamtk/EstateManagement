@extends ("ag.master")
@section ('content')
<div class="col-lg-8 col-md-7 col-xs-12">
<div class="dashborad-box">
<h4 class="title">Manage Dashboard</h4>
<div class="section-body">
<div class="row">
<div class="col-sm-4">
<div class="item">
<div class="icon">
<span class="fa fa-map-marker"></span>
</div>
<div class="info">
<h6 class="number">{{$countl}}</h6>
<p class="type">Listing</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="item">
<div class="icon">
<span class="fa fa-thumbs-up"></span>
</div>
<div class="info">
<h6 class="number">5</h6>
<p class="type">Review</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="item">
<div class="icon">
<span class="fa fa-comments"></span>
</div>
<div class="info">
<h6 class="number">{{$countm}}</h6>
<p class="type">Messages</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="dashborad-box">
<h4 class="title">Listing</h4>
<div class="section-body listing-table">
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>Property Name</th>
<th>Added Date</th>
<th>Description</th>
<th>Status</th>
</tr>
</thead>
<tbody>
    @foreach($propertys as $property)
<tr>
<td>{{$property->name}}</td>
<td>{{$property->created_at}}</td>
<td class="rating"><span>{{$property->description}}</span></td>
<td class="status"><span class=" active">Active</span></td>
<td class="edit"><a href="{{url('agent/editproperty')}}/{{$property->id}}')}}"><icon class="fa fa-pencil"></icon></a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
<div class="dashborad-box">
<h2 class="title">Messages</h2>
<div class="section-body">
<div class="messages">
@foreach($contacts as $contact)
<div class="message">

<div class="body">
<h6>{{$contact->name}}</h6>
<h7>{{$contact->email}}</h7>
<p class="post-time">{{$contact->created_at->diffForHumans()}}</p>
<p class="content">{{$contact->comment}} eiusmod tempor incididunt ut labore et dolore</p>
<div class="controller">
<ul>
<li><a href="#"><i class="fa fa-eye"></i></a></li>
<li><a href="{{url('agent/deletecomment')}}/{{$contact->id}}" onclick="return confirm('are u sure?')"><i class="fa fa-trash"></i></a></li>
</ul>
</div>
</div>
</div>
@endforeach

</div>
</div>
</div>
<div class="dashborad-box">
<h4 class="title">Review</h4>
<div class="section-body">
<div class="reviews">
<div class="review">
<div class="thumb">
<img class="img-fluid" src="assets/img/dashboard/thumb-1.jpg" alt="">
</div>
<div class="body">
<h6>John Doe
<span class="stars">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
<i class="lni-star"></i>
</span>
</h6>
<p class="post-time">5 hours ago</p>
<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
<div class="controller">
<ul>
<li><a href="#"><i class="lni-check-box"></i></a></li>
<li><a href="#"><i class="lni-pencil-alt"></i></a></li>
<li><a href="#"><i class="lni-reply"></i></a></li>
<li><a href="#"><i class="lni-trash"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="review">
<div class="thumb">
<img class="img-fluid" src="assets/img/dashboard/thumb-2.jpg" alt="">
</div>
<div class="body">
<h6>Charli Maria
<span class="stars">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
<i class="lni-star"></i>
</span>
</h6>
<p class="post-time">39 Minutes ago</p>
<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
<div class="controller">
<ul>
<li><a href="#"><i class="lni-check-box"></i></a></li>
<li><a href="#"><i class="lni-pencil-alt"></i></a></li>
<li><a href="#"><i class="lni-reply"></i></a></li>
<li><a href="#"><i class="lni-trash"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
@endsection