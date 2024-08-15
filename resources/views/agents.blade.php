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

    .card {
        max-width: 380px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    .connect {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: blue;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .container a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }
</style>
@endsection
@section ("content")

<div class="container mt-5">
    <div class="m-4 mb-5">
        <h1 id="first">Our Super Talented Agents</h1>
    </div>
    <div class="row">
     
       @foreach($agents as $agent)
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="/storage/profile/{{$agent->image}}" alt="John" style="width:100%">
                <h1>{{$agent->fname}}</h1>
                <p class="title">{{$agent->email}}</p>
                <p>+91 {{$agent->phone}}</p>
                <div style="margin: 24px 0;">
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <p><a class=connect href="{{url('agentsingle')}}/{{$agent->id}}">Connect</a></p>
            </div>
        </div>
        @endforeach
    </div>



</div>

@endsection
