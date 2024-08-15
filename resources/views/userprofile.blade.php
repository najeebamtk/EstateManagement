@extends ("layout.master")
@section ('content')
<div class="container mt-5">
    <div>
            <h1 id="first"> User Profile</h1>
        </div>
        <br>
        <br>
        <div class="row">
            
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{$user->fname}}</h5>
            <p class="text-muted mb-4">{{$user->email}}</p>
            <div class="d-flex justify-content-center mb-2">
              <a  href="{{url('edituserprofile')}}" >Edit Profile</a>
              <a  href="{{url('edituserpassword')}} "> Edit Password</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->fname}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Added On:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->created_at->format('M d,Y')}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Last Name:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->lname}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Id:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->id}}</p>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </div>
  </div>
  <div>
</section>
        </div>
</div>
@endsection
