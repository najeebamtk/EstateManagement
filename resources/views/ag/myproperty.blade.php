@extends ("ag.master")
@section ('content')
<div class="col-lg-8 col-md-7 col-xs-12">
    <div class="my-properties">
        <table class="table-responsive">
            <thead>
                <tr>
                    <th>Property Image</th>
                    <th>Details</th>
                    <th>Date Added</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($getproperty as $property)

                <tr>
                    <td class="image">
                        <img alt="my-properties-3" src="/storage/profile/{{$property->image1}} " class="img-fluid">
                    </td>
                    <td>
                        <div class="inner">
                                <h2>{{ $property->name }}</h2>
                            </a>
                            <figure><i class="fa fa-map-marker"></i> {{$property->address}}, {{ $property->location}}</figure>
                            <div class="tag price">{{$property->price}} Rupees </div>
                        </div>
                    </td>
                    <td>{{$property->created_at}} </td>
                    <td>{{$property->status }}</td>
                    <td class="actions">
                        <a href="{{url('agent/editproperty')}}/{{$property->id}}" class="edit"><i class="fa fa-pencil"></i>Edit</a>
                        <a href="{{url('agent/deleteproperty')}}/{{$property->id}}" onclick="return confirm('are u sure?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach

                
                   
               
               

            </tbody>
        </table>
        <div class="pagination-container">
            <nav>
                <ul class="pagination">
    {{ $getproperty->links() }}
 </div>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection