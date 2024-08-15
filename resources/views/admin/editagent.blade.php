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
    <div class="container-fluid"
    <div class="row">
  <!-- Background image -->
<div class="col-lg-8 col-md-7 col-xs-12 pt-4 pr-5">
<div class="my-address">
<h3 class="heading">Update Agent</h3>
                        <form method="post" Sclass="forms-sample" name="agentform" action="{{url('admin/updateagent')}}/{{$agent->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputCity1">Name</label>
                                <input type="text" autocomplete="off" class="form-control" name="name" id="name" value="{{$agent->name}}">
                                <span id="name_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Full Name</label>
                                <input type="text" autocomplete="off" class="form-control" name="fullname" id="fullname"  value="{{$agent->fname}}">
                                <span id="f_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email"  name="email"  value="{{$agent->email}}">
                                <span id="email_error"></span>
                            </div>
                           
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone"  name="phone"  value="{{$agent->phone}}">
                                <span id="phone_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea autocomplete="off" class="form-control" name="description" id="description" >{{$agent->description}}</textarea>
                                <span id="description_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Agent Image upload</label>
                                <input type="file" name="image" accept="image/*" value=" {{$agent->image}}">
                                <span id="image_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Details</label>
                                <textarea autocomplete="off" class="form-control" name="details" id="details" >{{$agent->details}}</textarea>
                                <span id="details_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control round-input" id="skype"  name="skype"  value="{{$agent->skype}}">
                                <span id="skype_error"></span>
                            </div>
                            <button type="submit" class="btn btn-primary" style="text-align: center;" onclick="return validateform()">Submit Changes</button>
                       

                        </form>
                    </div>
                </div>
                </div>
                </div>
</div>
            @endsection
@section('script')
<script src="{{asset('js/jquery.validate.js')}}"></script>
         <script>
        function validateform() {
            
            var name = document.getElementById("name");
            var fullname = document.getElementById("fullname");
            var email = document.getElementById("email")
            var password = document.getElementById("password")
            var phone = document.getElementById("phone")
            var description = document.getElementById("description")
            var details = document.getElementById("details")
            var skype = document.getElementById("skype")
            var is_valid = 1;
            if (!name.value) {
                document.getElementById("name_error").innerHTML = "plese enter name";
                document.getElementById("name_error").style.color = 'red'
                is_valid = 0;

            } else {
                document.getElementById("name_error").innerHTML = ""
            }
            if (!fullname.value) {

                document.getElementById("f_error").innerHTML = "plese enter full  name";
                document.getElementById("f_error").style.color = 'red';
                is_valid = 0;

            } else {
                document.getElementById("f_error").innerHTML = ""

            }
            emai=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if (!email.value) {
                document.getElementById("email_error").innerHTML = "plese enter email";
                document.getElementById("email_error").style.color = 'red';
                is_valid = 0;

            }
            else if(!email.value.match(emai)){
                document.getElementById("email_error").innerHTML = "plese enter  valid email";
                document.getElementById("email_error").style.color = 'red'
                is_valid=0;
            }else {
                document.getElementById("email_error").innerHTML = ""
            }
            if (!password.value) {
                document.getElementById("password_error").innerHTML = "plese enter password";
                document.getElementById("password_error").style.color = 'red'
                is_valid = 0;

            } else {
                document.getElementById("password_error").innerHTML = ""
            }
            if (!phone.value) {
                document.getElementById("phone_error").innerHTML = "plese enter phone";
                document.getElementById("phone_error").style.color = 'red'
                is_valid = 0;

            }
            else if(isNaN(phone.value)||phone.value.length<10||phone.value.length>11){
                document.getElementById("phone_error").innerHTML = "plese enter  valid phone";
                document.getElementById("phone_error").style.color = 'red'
                is_valid=0;
            } else {
                document.getElementById("phone_error").innerHTML = ""
            }
                    if (!description.value) {
                document.getElementById("description_error").innerHTML = "plese enter description";
                document.getElementById("description_error").style.color = 'red'
                is_valid = 0;

            } else {
                document.getElementById("description_error").innerHTML = ""
            }
            if (!details.value) {
                document.getElementById("details_error").innerHTML = "plese enter details";
                document.getElementById("details_error").style.color = 'red'
                is_valid = 0;

            } else {
                document.getElementById("details_error").innerHTML = ""
            }
            if (!skype.value) {
                document.getElementById("skype_error").innerHTML = "plese enter skype";
                document.getElementById("skype_error").style.color = 'red'
                is_valid = 0;

            } else {
                document.getElementById("skype_error").innerHTML = ""
            }
            if (is_valid == 0) {
                return false;
            }
            else {
                return true;
            }


        }
        </script>
                    @endsection
        
