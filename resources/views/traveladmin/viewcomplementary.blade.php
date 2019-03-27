@extends('traveladmin.travellayout.master')
@section('app-title')
ViewCategory
@stop
@section('breadcrumb-item')
ViewCategory
@stop
@section('content')
<div class="tile">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Complementary Id</th>
          <th>Complementary Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($complementary as $complementaries)
        <tr>
          <td>{{ $complementaries->id }}</td>
          <td><img src="{{ url($complementaries->image_name) }}" class="img" ></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection