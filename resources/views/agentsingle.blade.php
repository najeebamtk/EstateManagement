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
        .social-icons {
            margin: 24px 0;text-align:center;
        }
        .social-icons a {
        text-decoration: none;
        font-size: 22px;
        color: black;
        text-align: center;
        }

        </style>
        @endsection
@section("content")
    <div class="container">
    <div class="mt-5">
            <h1 id="first">{{$agent->fname}}</h1>
            <h2 id="two">Chief Agent</h2>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6">
        <img src="/storage/profile/{{$agent->image}}" style="width: 450px;;" alt="">
        </div>
        <div class="col-lg-6">
            <h4><strong> {{$agent->fname}}</strong></h4>
            <h4><strong>{{$agent->name}}</strong></h4>
            <p class="mt-4"> {{$agent->description}} It helps designers plan out where the content will sit, without needing to wait for the content to be written and approved. It originally comes from a Latin text, but to today's reader, it's seen as gibberish.</p>
            <div class="agent">
            <ul class="list-unstyled">
                    <li class="d-flex justify-content-between mb-4">
                      <strong>Phone:</strong>
                      <span class="color-text-a">+91 {{$agent->phone}} </span>
                    </li>
                    <li class="d-flex justify-content-between  mb-4">
                      <strong>Created On:</strong>
                      <span class="color-text-a">{{$agent->created_at}}</span>
                    </li>
                    <li class="d-flex justify-content-between  mb-4">
                      <strong>Email:</strong>
                      <span class="color-text-a">{{$agent->email}}</span>
                    </li>
                    <li class="d-flex justify-content-between  mb-4">
                      <strong>Skype:</strong>
                      <span class="color-text-a">{{$agent->skype}}</span>
                    </li>
                  </ul>
                </div>
                <div class="social-icons">
                        <a href="#"><i class="fa fa-dribbble"></i></a> 
                        <a href="#"><i class="fa fa-twitter"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a> 
                </div>
        </div>
         </div>
         <div class="mb-5 mt-5">
             <h3><strong>My Properties</strong></h3>
         </div>
         <div class="row mb-6">
           @foreach ($properties as $property) 
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="/storage/profile/{{$property->image1}} " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h3 class="card-title">{{$property->name}}</h3>
                        <h4 class="card-title">{{$property->location}}</h4>
                        <div class="tag price">{{$property->price}} Rupees </div>
                        <p class="card-text"> Status: {{$property->status}}</p>

                        <a href="{{url('propertysingle')}}/{{$property->id}}" class="btn btn-primary">Click to View</a>
                    </div>
                </div>
            </div>
            @endforeach
        

          

        </div>
         </div>
         @endsection




   


