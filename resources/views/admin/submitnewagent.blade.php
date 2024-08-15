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
                   New Agent
                  </li>
                </ol>
              </nav>
              <h1 class="mb-0 fw-bold"> New Agent Requests</h1>
            </div>
          </div>
        </div>

        
        <div class="container-fluid">
               
                <div class="row">
                <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-subtitle">
                   Recently Requested Agents
                  </h5>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Agent Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Date Requested</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($agents as $agent)
                      <tr>
                        <th>{{ $agent->name }}</th>
                        <td>{{ $agent->email }}</td>
                        <td>{{ $agent->created_at }}</td>
                        <td>{{ $agent->phone }}</td>
                        <td class="actions">
                        
                        @if($agent->status ==1)
                        approved
                        @else
                        <a href="{{url('admin/newagent/approve')}}/{{$agent->id}}" class="edit"><i class="mdi mdi-check"></i>Approve</a>
                        
                        <a href="{{url('admin/newagent/delete')}}/{{$agent->id}}" onclick="return confirm('are u sure?')" class=" p-2"><i class="fa fa-trash"></i></a>
                    </td>
                    @endif
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
@section('script')
<script>
       
        </script>
    @endsection