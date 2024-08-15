@extends ("admin.master")
@section ('style')
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
@section ('content')
<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-6">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item">
                    <a href="index.html" class="link"
                      ><i class="mdi mdi-home-outline fs-4"></i
                    ></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Profile
                  </li>
                </ol>
              </nav>
              <h1 class="mb-0 fw-bold">Profile</h1>
            </div>
          </div>
        </div>
                 <!-- ============================================================== -->
                 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{asset('admin-assets/assets/images/users/5.jpg')}}"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{$profile->name}}</h4>
                                    <h6 class="card-subtitle">Admin</h6>
                                
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email Address </small>
                                <h6>{{$profile->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 {{$profile->phone}}</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>{{$profile->address}}</h6>
                                
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" id="profileform" method="post" action="{{url('admin/updateprofile')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fname"
                                                class="form-control form-control-line"value="{{$profile->name}}"> 
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phone"
                                                class="form-control form-control-line" value="{{$profile->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="address" name="address"
                                                class="form-control form-control-line"
                                                id="example-email" value="{{$profile->address}}" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="message"  >{{$profile->message}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" name="country" >{{$profile->country}}
                                                <option value="India">India</option>
                                                <option value="London">London</option>
                                                <option value="USA">Usa</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Thailand">Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" >Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

        
</div>
        
@endsection
@section('script')
        <script src="{{asset('js/jquery.validate.js')}}"></script>
        
        <script>
            $().ready(function(){
                $('#profileform').validate({
                    errorClass:'text-danger',
                    rules:{
                        fname:{
                            required:true,
                            minlength:3
                        },
                      
                        phone:{
                            required:true,
                            minlength:10,
                            maxlength:10,
                            digits: true
                        },
                        message:{
                            required:true,
                            minlength:3
                        },
                        address:{
                            required:true,
                            minlength:3
                        }
                    },
                    messages:{
                        fname:{
                            required:"fname is mandatory",
                            minlength:"atleast 3 character long value required"
                        },
                      
                        password:" password is mandatory",
                        phone:{
                            required:"phone field is mandatory ",
                            digits:"please enter valid phone number"
                        },
                        message:{
                            required:"message field is required",
                            minlength:"atleast 3 character long value is required "
                        },
                        address:{
                            required:"address field is required",
                            minlength:"atleast 3 character long value is required "
                        }
                    }
                });
            })


            </script>
            @endsection