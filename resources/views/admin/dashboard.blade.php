@extends ("admin.master")
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
                    Dashboard
                  </li>
                </ol>
              </nav>
              <h1 class="mb-0 fw-bold">Dashboard</h1>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <!-- title -->
                  <div class="d-md-flex">
                    <div>
                      <h4 class="card-title">Latest Added Properties</h4>
                      <h5 class="card-subtitle">
                        Overview of Latest Properties
                      </h5>
                    </div>
                    <div class="ms-auto">
                      <div class="dl">
                        <select class="form-select shadow-none">
                          <option value="0" selected="">Monthly</option>
                          <option value="1">Daily</option>
                          <option value="2">Weekly</option>
                          <option value="3">Yearly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- title -->
                  <div class="table-responsive">
                    <table class="table mb-0 table-hover align-middle text-nowrap">
                      <thead>
                        <tr>
                          <th class="border-top-0">Property Name</th>
                          <th class="border-top-0">Location</th>
                          <th class="border-top-0">Agent</th>
                          <th class="border-top-0">Agent Number</th>
                          <th class="border-top-0">Price</th>
                          <th class="border-top-0">Property Type</th>
                          <th class="border-top-0">Added Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($propertys as $property)
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="m-r-10">
                                <a class="
                                    btn btn-circle
                                    d-flex
                                    btn-purple
                                    text-white
                                  ">PP</a>
                              </div>
                              <div class="">
                                <h4 class="m-b-0 font-16">{{$property->name}}</h4>
                              </div>
                            </div>
                          </td>
                          <td>{{$property->location}}</td>
                          <td>{{$property->fname}}</td>
                          <td>
                            <label class="badge bg-purple">{{$property->phone}}</label>
                          </td>
                          <td>{{$property->price}}</td>
                          <td>{{$property->type}}</td>
                          <td>
                            <h5 class="m-b-0">{{$property->created_at->diffForHumans()}}</h5>
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


        <div class="row">
        <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Messages</h4>
                </div>
                <div class="comment-widgets scrollable">
                  <!-- Comment Row -->
                  @foreach($messages as $message)

                  <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2">
                    <div class="m-r-10">
                                <a class="
                                    btn btn-circle
                                    d-flex
                                    btn-purple
                                    text-white
                                  ">MM</a>
                              </div>
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">{{$message->name}}</h6>
                      <p>{{$message->email}}</p>
                      <p>subject: {{$message->subject}}</p>

                      <span class="m-b-15 d-block">{{$message->message}}Lorem Ipsum  of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">{{$message->created_at->format('M d,Y')}}</span>
                        <span class="label label-danger label-rounded">Delete</span>
                        <span class="action-icons active">
                          <a href="javascript:void(0)"><i class="mdi mdi-pencil-box-outline fs-4"></i></a>
                          <a href="javascript:void(0)"><i class="mdi mdi-window-close fs-4"></i></a>
                          <a href="javascript:void(0)"><i class="mdi mdi-heart-outline fs-4 text-danger"></i></a>
                        </span>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                </div>
        </div>
        </div>
                  <div class="row">
                  <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Sales Summary</h4>
                      <h6 class="card-subtitle">Ample admin</h6>
                    </div>
                    <div class="ms-auto d-flex no-block align-items-center">
                      <ul class="
                          list-inline
                          dl
                          d-flex
                          align-items-center
                          m-r-15 m-b-0
                        ">
                        <li class="
                            list-inline-item
                            d-flex
                            align-items-center
                            text-info
                          ">
                          <i class="mdi mdi-checkbox-blank-circle font-10 me-1"></i>
                          Ample
                        </li>
                       
                      </ul>
                    </div>
                  </div>
                  <div class="amp-pxl mt-4" style="height: 350px">
                    <div class="chartist-tooltip" style="top: 140.938px; left: -37.5px;"><span class="chartist-tooltip-value">9</span></div>
                  <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="315" y2="315" x1="50" x2="719.125" class="ct-grid ct-vertical"></line><line y1="255" y2="255" x1="50" x2="719.125" class="ct-grid ct-vertical"></line><line y1="195" y2="195" x1="50" x2="719.125" class="ct-grid ct-vertical"></line><line y1="135" y2="135" x1="50" x2="719.125" class="ct-grid ct-vertical"></line><line y1="75" y2="75" x1="50" x2="719.125" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="719.125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="90.29464285714286" x2="90.29464285714286" y1="315" y2="99" class="ct-bar" ct:value="9"></line><line x1="185.88392857142858" x2="185.88392857142858" y1="315" y2="195" class="ct-bar" ct:value="5"></line><line x1="281.4732142857143" x2="281.4732142857143" y1="315" y2="243" class="ct-bar" ct:value="3"></line><line x1="377.06249999999994" x2="377.06249999999994" y1="315" y2="147" class="ct-bar" ct:value="7"></line><line x1="472.65178571428567" x2="472.65178571428567" y1="315" y2="195" class="ct-bar" ct:value="5"></line><line x1="568.2410714285714" x2="568.2410714285714" y1="315" y2="75" class="ct-bar" ct:value="10"></line><line x1="663.8303571428571" x2="663.8303571428571" y1="315" y2="243" class="ct-bar" ct:value="3"></line></g><g class="ct-series ct-series-b"><line x1="105.29464285714286" x2="105.29464285714286" y1="315" y2="171" class="ct-bar" ct:value="6"></line><line x1="200.88392857142858" x2="200.88392857142858" y1="315" y2="243" class="ct-bar" ct:value="3"></line><line x1="296.4732142857143" x2="296.4732142857143" y1="315" y2="99" class="ct-bar" ct:value="9"></line><line x1="392.06249999999994" x2="392.06249999999994" y1="315" y2="195" class="ct-bar" ct:value="5"></line><line x1="487.65178571428567" x2="487.65178571428567" y1="315" y2="219" class="ct-bar" ct:value="4"></line><line x1="583.2410714285714" x2="583.2410714285714" y1="315" y2="171" class="ct-bar" ct:value="6"></line><line x1="678.8303571428571" x2="678.8303571428571" y1="315" y2="219" class="ct-bar" ct:value="4"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="320" width="95.58928571428571" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 96px; height: 20px;">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="145.58928571428572" y="320" width="95.58928571428571" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 96px; height: 20px;">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="241.17857142857142" y="320" width="95.5892857142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 96px; height: 20px;">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="336.7678571428571" y="320" width="95.58928571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 96px; height: 20px;">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="432.35714285714283" y="320" width="95.58928571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 96px; height: 20px;">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="527.9464285714286" y="320" width="95.58928571428567" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 96px; height: 20px;">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="623.5357142857142" y="320" width="95.58928571428578" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 96px; height: 20px;">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="255" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="195" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">2.5</span></foreignObject><foreignObject style="overflow: visible;" y="135" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">5</span></foreignObject><foreignObject style="overflow: visible;" y="75" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">7.5</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">12.5</span></foreignObject></g></svg></div>
                </div>
              </div>
            </div>
                  </div>

          
                  
        

        
</div>
        
@endsection