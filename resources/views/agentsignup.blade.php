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
<div class="p-5 bg-image" style="
        background-image: url('');
        "></div>
  <!-- Background image -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 blog-margin stretch-card" id="sign" >
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">Agent Signup</h2>
                        <form method="post" Sclass="forms-sample" name="agentform" action="{{url('agentsignup')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputCity1">Name</label>
                                <input type="text" autocomplete="off" class="form-control" name="name" id="name" placeholder="enter name" value="">
                                <span id="name_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Full Name</label>
                                <input type="text" autocomplete="off" class="form-control" name="fullname" id="fullname" placeholder="enter full name" value="">
                                <span id="f_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                <span id="email_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                <span id="password_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                                <span id="phone_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea autocomplete="off" class="form-control" name="description" id="description" placeholder="description"></textarea>
                                <span id="description_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Agent Image upload</label>
                                <input type="file" name="image" accept="image/*">
                                <span id="image_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Details</label>
                                <textarea autocomplete="off" class="form-control" name="details" id="details" placeholder="details"></textarea>
                                <span id="details_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control round-input" id="skype" placeholder="Enter skype" name="skype">
                                <span id="skype_error"></span>
                            </div>
                            <button type="submit" class="btn btn-primary" style="text-align: center;" onclick="return validateform()">Submit</button>
                            <div class="text-block text-center my-3">
                            @if(isset($message))
                             <p>{{$message}}</p>
                            @endif
                    <span class="text-small font-weight-semibold">Already a member ?</span>
                    <a href="#" onclick="root()" class="text-blue text-small ">Login to your account</a>
                  </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 blog-margin stretch-card" id="login" style="display:none" >
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">Agent Login</h2>
                        <form method="post" Sclass="forms-sample" name="loginform" id="loginform" action="{{url('agentlogin')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputCity1">Email</label>
                                <input type="text" autocomplete="off" class="form-control" name="email1" id="email1" placeholder="enter email" value="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="Enter password" name="password1">
                            </div>
                            <button type="submit" class="btn btn-primary" style="text-align: center;" >Login</button>
                            <div class="text-block text-center my-3">
                            @if(isset($message))
                                <p>{{$message}}</p>
                            @endif
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="#" onclick="roots()" class="text-blue text-small ">Create new account</a>
                  </div>
                        </form>
                    </div>
                </div>
            </div>




        </div>

    </div>

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
            else if(isNaN(phone.value)||phone.value.length<10||(phone.value.length>=11)){
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

        $().ready(function(){
                $('#loginform').validate({
                    errorClass:'text-danger',
                    rules:{
                      email1:{
                            required:true,
                            email:true
                        },
                        password1:"required"
                    },
                    messages:{
                      email1:{
                            required:"email is mandatory",
                            email:"please enter valid email"
                        },
                        password1:"password is mandatory"
                      }
                    });
                  })


                


        
        function root(){
                    var x = document.getElementById("login");
                    var y=document.getElementById("sign");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
  

                  }

                  function roots(){
                    var x = document.getElementById("sign");
                    var y=document.getElementById("login");

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";

  } else {
    x.style.display = "none";
    y.style.display = "block";

  }
                  }




        
    </script>
</body>

</html>