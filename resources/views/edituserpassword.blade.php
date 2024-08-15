@extends ("layout.master")
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
<div class="container mt-5">


<div>
    <h1 id="first">Change Password</h1>
</div>
<br>
<br>
<div class="row">

<div class="col-lg-8 col-md-7 col-xs-12 pt-4 pr-5">
<div class="my-address">
<form  id="changeform" action="{{url('updateuserpassword')}}" method="post"> 
    @csrf
<div class="row">
<div class="col-lg-12 ">
<div class="form-group name">
<label>Current Password</label>
<input type="password"  id="current_password" name="current_password" class="form-control" placeholder="Current Password">
</div>
</div>
<div class="col-lg-12">
<div class="form-group email">
<label>New Password</label>
<input type="password" name="new_password"  id="new_password" class="form-control" placeholder="New Password">
</div>
</div>
<div class="col-lg-12 ">
<div class="form-group subject">
<label>Confirm New Password</label>
<input type="password" name="confirm_newpassword" class="form-control" placeholder="Confirm New Password">
</div>
</div>
<div class="col-lg-12">
<div class="send-btn mt-3">
<button type="submit" class="btn btn-primary mb-5">Send Changes</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
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
                        confirm_newpassword:{
                            required:true,
                            equalTo:'#new_password'
                        }
                    },


                        messages:{
                            current_password:"current password required",
                            new_password:{
                                required:"new password required",
                            },
                            confirm_newpassword:{
                            required:"confirm new password is required",
                            equalTo:"this value should equal to new password"
                        }

                        }


                    

                });
            })

            </script>
            @endsection