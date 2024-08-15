@extends ("layout.master")
@section ("content")


<div class="container mt-5">
  <div class="row" id="one">
    <div class="col-lg-6">

      <form name="contactform" id="contactform" method="post" action="{{url('contact/postmessage')}}">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" class="form-control" name="name" placeholder="your name" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="email" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Subject</label>
          <input type="text" class="form-control" name="subject" placeholder="subject" required>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <textarea class="form-control" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5" id="button">Send Message
        </button>
        @if(isset($message))
        <p>{{$message}}</p>
        @endif
      </form>



    </div>
    <div class="col-lg-6">
      <img src="{{asset('images/contact.jpg')}}" style="width:100%;">
    </div>
  </div>
</div>

@endsection
@section('script')
  <script src="{{asset('js/jquery.validate.js')}}"></script>
   <script>
      $().ready(function(){
        $("#contactform").validate({
          errorClass: 'text-danger',
          rules:{
            name:"required",
            email:{
                required:true,
                email:true
            },
            subject:{
                required:true,
                minlength:5
            },
            message:{
              required:true,
              minlength:5
            }
          },
          messages:{
            name:"please enter your name",
            email:{
                required:"please enter your email",
                email:"enter valid email"
            },
            subject:{
              required:"please enter your subject",
                minlength:"enter minimum 5 character long subject"
            },
            message:{
              required:"please enter your message",
                minlength:"enter minimum 5 character long message"
            }

          } 
        });
      })


    </script>

@endsection
@section('style')
  <style>

    #button {
      margin-left: 170px;
      margin-top: 20px;
      font-family: sans-serif;
      font-size: 20px
    }
.form-control.text-danger
 {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem)!important;
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e);
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
  </style>
@endsection