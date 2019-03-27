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
            <th>Category Id</th>
            <th>Category</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categorytype as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->category }}</td>
           </tr>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
      