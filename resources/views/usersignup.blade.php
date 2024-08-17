
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

    <div class="card-body py-5 px-md-5" id="sign">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">User Sign up </h2>
          <form id="signup" action="{{url('usersignup')}}" method="post">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                <label class="form-label" for="form3Example1">First name</label>
                  <input type="text" id="fname" class="form-control" name="fname">
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                <label class="form-label" for="form3Example2">Last name</label>
                  <input type="text" id="lname" class="form-control" name="lname">
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
              <input type="email" id="email" class="form-control" name="email">
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4">Password</label>
              <input type="password" id="password" class="form-control" name="password">
            </div>

          

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
            @if(isset($message))
        <p>{{$message}}</p>
        @endif
        <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already a member ?</span>
                    <a href="/login" class="text-blue text-small ">Login to your account</a>
                  </div>
         
          </form> 
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Section: Design Block -->
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="{{asset('js/jquery.validate.js')}}"></script>
        
        <script>



           $().ready(function(){
                $('#signup').validate({
                    errorClass:'text-danger',
                    rules:{
                      fname:{
                            required:true,
                            minlength:3
                        },
                        lname:{
                            required:true,
                            minlength:3
                        },
                        email:{
                            required:true,
                            email:true
                        },
                        password:"required"
                    },
                    messages:{
                        fname:{
                            required:"firstname is mandatory",
                            minlength:"atleast 3 character long value required"
                        },
                        lname:{
                            required:"lastname is mandatory",
                            minlength:"atleast 3 character long value required"
                        },
                        email:{
                            required:"email is mandatory",
                            email:"please enter valid email"
                        },
                        password:"password is mandatory"
                      }
                    });
                  })


          </script>



</body>
</html>