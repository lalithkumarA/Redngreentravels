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
        <tbody>
          <tr>
            <th>Category</th>
            <td>
              @foreach($details->multicatagories as $multicatagory)
              {{ $multicatagory->CatagoryData->category  }},
              @endforeach
            </td>
          </tr>
          <tr>
            <th>Type</th>
            <td>{{ $details->type }}</td>
          </tr>
          <tr>
            <th>Trending</th>
            <td>{{ $details->trending }}</td>
          </tr>
          <tr>
            <th>Departure</th>
            <td>{{ $details->date }}</td>
          </tr>
          <tr>
            <th>Cost</th>
            <td>Rs : {{ $details->cost }} /-</td>
          </tr>
          <tr>
            <th>Package Excludes </th>
            <td>Rs : {{$details->Package_Excludes}} /-</td>
          </tr>
          <tr>
            <th>Package includes</th>
            <td>Rs : {{$details->Package_includes}} /-</td>
          </tr>
          <tr>
            <th>Terms and conditions</th>
            <td>{{$details->Terms_and_conditions}}</td>
          </tr>
          <tr>
            <th>Duration</th>
            <td>{{$details->duration}}</td>
          </tr>
          <tr>
            <th>Highlights</th>
            <td>{{ $details->highlights }}</td>
          </tr>
          <tr>
            <th>Itinerary</th>
            <td><?php print_r($details->itinerary); ?></td>
          </tr>
          <tr>
            <th>Over view</th>
            <td>{{ $details->overview }}</td>
          </tr>
          <tr>
          <th>complementary</th>
            <td>
              @if(!empty($details->complementary))
                @foreach(unserialize($details->complementary) as $complementary)
                  <img  src="{{ url(auth()->user()->getcomplementary($complementary)->image_name) }}" class="img1"/>
                @endforeach
                @else
                <p>No Complementary Selected</p>
              @endif
            </td>
          </tr>
          <tr>
            <th>Image</th>
          
          <td>
       @foreach($details->images as $image)
       
                  <img  src="{{ url($image->image_name) }}" id="output" alt="No image" class="img"/>
                    @endforeach
          </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  

@endsection
      