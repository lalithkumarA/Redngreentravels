@extends('traveladmin.travellayout.master')
@section('app-title')
ViewItinerary
@stop
@section('breadcrumb-item')
ViewItinerary
@stop
@section('content')
  <div class="tile">
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Package Name</th>
            {{--  <th>Category</th>  --}}
            <th>Type</th>
            <th>Date</th>
            <th>Cost</th>
            <th>More</th>
          </tr>
        </thead>
        <tbody>
          @foreach($details as $detail)
          <tr>
            <td>{{ $detail->id }}</td>
            <td>{{ $detail->packagename }}</td>
            {{--  <td>{{ $detail }}</td>  --}}
            <td>{{ $detail->type }}</td>
            <td>{{ $detail->date }}</td>
            <td>{{ $detail->cost }}</td>
            <td><a href="{{ url('/viewitinerary').'/'.$detail->id}}"><button class="buttonview">View</button></a>
              <a href="{{ url('/itineraryedit').'/'.$detail->id }}"><button class="buttonview">Edit</button></a>
              
             <a href="{{ url('itinerarydelete').'/'.$detail->id }}" ><button class="buttonview" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
              
             </a>
            </td>

          </tr>
          
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
{{$details->onEachSide(1)->links()}}
@endsection
      