<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-control.text-danger {
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem) !important;
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e);
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 blog-margin stretch-card">
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <h4 class="card-title"><strong> property Form</strong></h4><br>
                        <form action="" method="post" id="propertyform">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><strong>Property Name</strong></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="enter property name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><strong>Property Location</strong></label>
                                <input type="text" class="form-control" name="location" id="location" placeholder="enter property location">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><strong>Price</strong></label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="enter property price">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> <strong>Property Address </strong></label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="enter property address">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"><strong>Property Image 1</strong></label>
                                <input type="file" class="form-control-file" id="image1" name="image1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"> <strong>Property Image 2 </strong></label>
                                <input type="file" class="form-control-file" id="image2" name="image2">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"> <strong>PropertyType </strong></label><br>

                                <input type="radio" id="type1" name="type" value="">
                                  <label for="html" class="mr-5">House</label>
                                  <input type="radio" id="type2" name="type" value="">
                                  <label for="css" class="mr-5">Flat</label>
                                  <input type="radio" id="type3" name="type" value="">
                                  <label for="javascript">Apartment</label>
                                <br>
                                <label id="type-error" class="text-danger" for="type" style="display: none;"></label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1"><strong>Property Description</strong></label>
                                <textarea autocomplete="off" class="form-control" rows="3" name="description" id="exampleInputCity1" placeholder=" enter property description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"> <strong>Property Status </strong></label><br>

                                <input type="radio" id="status1" name="status" value="">
                                  <label for="html" class="mr-5">Rent</label>
                                  <input type="radio" id="status1" name="status" value="">
                                  <label for="css">Sale</label>
                                <br>
                                <label id="status-error" class="text-danger" for="status" style="display: none;"></label>

                            </div>
                            <div class="form-group">
                                <label for="area"><strong>Area</strong></label>
                                <input type="text" class="form-control round-input" id="area" placeholder="Enter area" name="area">
                            </div>
                            <div class="form-group" style="width:500px;">
                                <label for="area"><strong>Property Agent</strong></label><br>
                                <select class="custom-select form-control">
                                    <option value="0">gara:</option>
                                    <option value="1">Audi</option>
                                    <option value="2">BMW</option>
                                    <option value="3">Citroen</option>
                                    <option value="4">Ford</option>
                                    <option value="5">Honda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="area"><strong>Beds</strong></label><br>
                                <div class="input-group" style="width:500px;">
                                    <select class="custom-select form-control">
                                        <option value="1">1 Bed</option>
                                        <option value="2">2 Bed</option>
                                        <option value="3">3 Bed</option>
                                        <option value="4">4 Bed</option>
                                        <option value="5">5 Bed</option>
                                        <option value="6">6 Bed</option>
                                        <option value="7">7 Bed</option>
                                        <option value="8">8 Bed</option>
                                        <option value="9">9 Bed</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="area"><strong>Bathrooms</strong></label><br>
                                <div class="input-group" style="width:500px;">
                                    <select class="custom-select form-control">
                                        <option value="1">1 Bathroom</option>
                                        <option value="2">2 Bathroom</option>
                                        <option value="3">3 Bathroom</option>
                                        <option value="4">4 Bathroom</option>
                                        <option value="5">5 Bathroom</option>
                                        <option value="6">6 Bathroom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="area"><strong>Garages</strong></label><br>
                                <div class="input-group" style="width:500px;">
                                    <select class="custom-select form-control">
                                        <option value="1">1 Garage</option>
                                        <option value="2">2 Garage</option>
                                        <option value="3">3 Garage</option>
                                        <option value="4">4 Garage</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label for="area" class="pb-2"><strong>Amenities</strong></label><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="container">Balcony
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">Outdoor Kitchen
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="container" class="pb-2">Cable Tv
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">Deck
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="container">Tennis Courts
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">Internet
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="container">Parking
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">Sun Room
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <label class="container">Concrete Flooring
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit" class="btn btn-primary mt-3" id="button">Send Message

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="{{asset('js/jquery.validate.js')}}"></script>
        <script>
            $().ready(function(){
                $("#propertyform").validate({
                    errorClass: 'text-danger',
                    rules:{
                        name:"required",
                        location:"required",
                        price:{
                            required:true,
                           number:true
                        },
                        address:{
                            required:true,
                            minlength:4
                        },
                        image1:"required",
                        image2:"required",
                        type:"required",
                        description:{
                            required:true,
                            minlength:7
                        },
                        status:"required",
                        area:{
                            required:true,
                           number:true
                        }
                    },
                    messages:{
                        name:"property name field is mandatory",
                        location:"property location field is mandtory",
                        price:{
                            required:"price field is mandatory",
                            number:"only numeric value is allowed"
                        },
                        address:{
                            required:"property address field is mandatory",
                            minlength:"enter atleast 4 character long"
                        },
                        image1:"image field is mandatory",
                        image2:"image field is mandatory",
                        type:"select a type",
                        status:"select a status",
                        area:{
                            required:"area field is mandatory",
                            number:"only numeric value is allowed"
                        },
                        description:{
                            required:"property description field is mandatory",
                            minlength:"enter atleast 4 character long"
                        }



                    }

                });
            })

        </script>

</body>

</html>