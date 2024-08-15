@extends ("admin.master")
@section('style')
<style>
.img-fluid {
    max-width: 100%;
    height: auto;
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
                    <a href="index.html" class="link"
                      ><i class="mdi mdi-home-outline fs-4"></i
                    ></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                 My Agents
                  </li>
                </ol>
              </nav>
              <h1 class="mb-0 fw-bold">Agent List</h1>
            </div>
          </div>
        </div>

        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle">
                   Recently Added Agents
                  </h6>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Agent Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Date Added</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($agents as $agent)
                     
                      <tr>
                        <th scope="row">{{$agent->name}}</th>
                        <td class="image">
                        <img alt="my-agent-3" src="/storage/profile/{{$agent->image}} " class="img-fluid">
                    </td>
                        <td>{{$agent->email}}</td>
                        <td>{{$agent->created_at}}</td>
                        <td>{{$agent->phone}}</td>
                        <td class="actions">
                        <a href="{{url('admin/editagent')}}/{{$agent->id}}" class="edit"><i class="mdi mdi-pencil"></i>Edit</a>
                        <a href="{{url('admin/deleteagent')}}/{{$agent->id}}" onclick="return confirm('are u sure?')" class=" p-2"><i class="fa fa-trash"></i></a>
                    </td>
                      </tr>
                      @endforeach

                    </tbody>

                  </table>

                  
                </div>
              </div>
            </div>




                </div>
        </div>




                
</div>
        
        @endsection