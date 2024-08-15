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
@section("content")
<div class="container mt-5">


        <div>
            <h1 id="first">Update User Details</h1>
        </div>
        <br>
        <br>
        <div class="row">
        <div class="col-lg-8 blog-margin stretch-card" id="sign" >
                <div class="card mt-4 mb-4">
                    <div class="card-body">

                        <form method="post" Sclass="forms-sample" name="userform" action="{{url('updateuserprofile')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputCity1">Name</label>
                                <input type="text" autocomplete="off" class="form-control" name="firstname" id="name" value="{{$user->fname}}">
                                <span id="name_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Last Name</label>
                                <input type="text" autocomplete="off" class="form-control" name="lastname" id="lastname"  value="{{$user->lname}}">
                                <span id="f_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email"  name="email"  value="{{$user->email}}">
                                <span id="email_error"></span>
                            </div>
                            <button type="submit" class="btn btn-primary" style="text-align: center;" >Submit Changes</button>
                       </form>
                   </div>
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
$().ready(function(){
                $('#userform').validate({
                    errorClass:'text-danger',
                    rules:{
                      email:{
                            required:true,
                            email:true
                        },
                       firstname: "required",
                        lastname: "required",

                    },
                    messages:{
                      email:{
                            required:"email is mandatory",
                            email:"please enter valid email"
                        },
                        firstname: "first name field is mandatory",
                        lastname: "last name field is mandatory"


                      }
                    });
                  })
                  </script>
                  @endsection
                           
                         
