@extends ("ag.master")
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

<div class="col-lg-8 col-md-7 col-xs-12 pt-4 pr-5">
<div class="my-address">
<h3 class="heading">My Account</h3>
<form id="profile" action="{{url('updateagentdata')}}" method="post">
    @csrf
<div class="row">
<div class="col-lg-12 ">
<div class="form-group">
<label>Your Name</label>
<input type="text" name="name"  id="name" class="form-control" value="{{$agentdata->name}}">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Your Fullname</label>
<input type="text" name="fname" id="fname"  class="form-control" value="{{$agentdata->fname}}">
</div>
</div>
<div class="col-lg-12 ">
<div class="form-group">
<label>Email</label>
<input type="email" name="email"  id="email" class="form-control" value="{{$agentdata->email}}">
</div>
</div>
<div class="col-lg-12 ">
<div class="form-group">
<label>Phone</label>
<input type="text" name="phone" id="phone" class="form-control" value="{{$agentdata->phone}}">
</div>
</div>
<div class="col-lg-12 ">
<div class="form-group">
<label>Description</label>
<input type="text" name="description" id="description" class="form-control" value="{{$agentdata->description}}">
</div>
</div>
<div class="col-lg-12 ">
<div class="form-group">
<label>Skype</label>
<input type="text" name="skype"  id="skype" class="form-control" value="{{$agentdata->skype}}"/>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>About Me (Details)</label>
<textarea class="form-control" rows="5" name="details" id="details" >{{$agentdata->details}}</textarea>
</div>
</div>
<div class="col-lg-12">
<div class="send-btn">
<button type="submit" class="btn btn-common">Send Changes</button>
</div>
</div>
</div>
</form>
</div>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <!-- <script src="{{asset('js/jquery.validate.js')}}"></script>
        
        <script>
             $().ready(function(){
                $('#profile').validate({
                    errorClass:'text-danger',
                    rules:{
                        name:{
                            required:true,
                            minlength:3
                        },
                        title:{
                            required:true,
                            minlength:3
                        },
                        phone:{
                            required:true,
                            minlength:10,
                            maxlength:10,
                            digits: true
                        },
                        email:{
                            required:true,
                            email:true
                        },
                        message:{
                            required:true,
                            minlength:4
                        }
                    },
                    messages:{
                        name:{
                            required:"name is mandatory",
                            minlength:"atleast 3 character long value required"
                        },
                        title:{
                            required:"title is mandatory",
                            minlength:"atleast 3 character long value required"
                        },
                        phone:{
                            required:"phone field is mandatory ",
                            digits:"please enter valid phone number"
                        },
                        email:{
                            required:"email is mandatory",
                            email:"please enter valid email"
                        },
                      
                        message:{
                            required:"message field is required",
                            minlength:"atleast 3 character long value is required "
                        }
                    }
                });
            }) -->

            </script>
            @endsection