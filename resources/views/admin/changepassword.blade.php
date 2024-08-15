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
@endsection
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
                            <a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                         Change Password
                        </li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold"> Change Password</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" id="changeform" action="{{url('admin/changecurrentpassword')}}" method="post">
                                   @csrf
                                <div class="form-group">
                                        <label class="col-md-12">Current Password</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="current_password"
                                                class="form-control form-control-line" id="current_password" placeholder="Current Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">New Password</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="New Password"
                                                class="form-control form-control-line" name="new_password" placeholder="Nee Password"
                                                id="new_password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirm New Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password"  name="confirm_new" placeholder="Confirm New Password"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                  
                                
                                  
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
    </div>
        @endsection
        @section('script')
  <script src="{{asset('js/jquery.validate.js')}}"></script>
        
        <script>
            jQuery.validator.addMethod("notEqual", function(value, element, param) {
 return this.optional(element) || value != $(param).val();
}, "new password should be a new value");
            $().ready(function(){
                $('#changeform').validate({
                    errorClass:'text-danger',
                    rules:{
                        current_password:'required',
                        new_password:{
                            required:true,
                            notEqual:'#current_password'

                        },
                        confirm_new:{
                            required:true,
                            equalTo:'#new_password'
                        }
                    },
                        messages:{
                            current_password:"current password required",
                            new_password:{
                                required:"new password required",
                            },
                            confirm_new:{
                            required:"confirm new password is required",
                            equalTo:"this value should equal to new password"
                        },

                        }


                    

                });
            })

            </script>
            @endsection