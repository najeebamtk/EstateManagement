
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
        .card{
            max-width: 380px;
            font-family: arial;
        }
    </style>

@endsection

@section ("content")
    <div class="container mt-5">


        <div>
            <h1 id="first">Our Amazing Properties</h1>
        </div>
        <br>
        <br>
        <div class="row">

        @foreach($propertys as $property)
        <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="/storage/profile/{{$property->image1}} " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h3 class="card-title"><i class="fa fa-building" aria-hidden="true"></i>
{{$property->name}}</h3>
                        <h4 class="card-title"><i class="fa fa-map-marker" aria-hidden="true"></i>
{{$property->location}}</h4>
                        <div class="tag price"> <i class="fa fa-money" aria-hidden="true"></i>
{{$property->price}} Rupees </div>
                        <p class="card-text"> Status: {{$property->status}}</p>

                        <a href="{{url('propertysingle')}}/{{$property->id}}" class="btn btn-primary">Click to View</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        <br><br>
        <!-- <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{asset('images/property1.jfif')}} " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h3 class="card-title">Property Number</h3>
                        <h4 class="card-title">Property Name</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Click to View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{asset('images/property1.jfif')}} " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h3 class="card-title">Property Number</h3>
                        <h4 class="card-title">Property Name</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
                        <a href="#" class="btn btn-primary">Click to View</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{asset('images/property1.jfif')}} " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Property Name</h3>
                        <h4 class="card-title">Property Name</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Click to View</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
    @endsection
