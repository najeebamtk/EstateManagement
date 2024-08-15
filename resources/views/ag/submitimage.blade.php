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
<div class="col-lg-8 blog-margin stretch-card pr-5">
    <div class="card mt-4 mb-4">
        <div class="card-body">
            <h4 class="card-title"><strong> Image Form</strong></h4><br>
            <form method="post" id="imageform" action="{{url('agent/submitimage')}}" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>Image Name</strong></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="enter image name" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1"><strong> Image Upload</strong></label>
                    <input type="file" class="form-control-file" id="image1" name="image1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1"> <strong>Image Type </strong></label><br>

                    <input type="radio" id="type1" name="type" value="Living Room">
                      <label for="html" class="mr-5">Living Room</label>
                      <input type="radio" id="type2" name="type" value="Bed Room">
                      <label for="css" class="mr-5">Bed Room</label>
                      <input type="radio" id="type3" name="type" value="Kitchen">
                      <label for="javascript">Kitchen</label>
                    <br>
                    <label id="type-error" class="text-danger" for="type" style="display: none;"></label>
                </div>
                <div class="form-group">
                    <label for="garages"><strong>Property</strong></label><br>
                    <div class="input-group" style="width:500px;">
                    <select class="custom-select form-control"  >

                        @foreach($property as $prop)
                            <option value="{{$prop->id}}">{{$prop->name}}</option>
                       
                        @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3" id="button">Upload

                    </button>
                    @if(isset($message))
        <p>{{$message}}</p>
        @endif
                </div>
            </form>
        </div>
    </div>
    @endsection
    @section('script')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script>
         $().ready(function() {
            $("#propertyform").validate({
                errorClass: 'text-danger',
                rules: {
                    name: "required",
                    image1: "required",
                    type: "required",
                    property: "required"
                },
                messages: {
                    name: "image name  is mandatory",
                    property: "property field is mandtory",
                    image1: "image upload is mandtory",
                    type: "image type is mandtory"
                }
            });
         })
         </script>
    @endsection



