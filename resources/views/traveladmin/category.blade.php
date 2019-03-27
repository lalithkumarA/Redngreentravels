@extends('traveladmin.travellayout.master')
@section('app-title')
Category
@stop
@section('breadcrumb-item')
Category
@stop
@section('content')
<form action="{{route('insert')}}" method="post">
	@csrf
<div class="title-form">
        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="col-lg-12">
                 <label class="control-label-form"> Add Category</label>
                  <input class="form-control" id="inputLarge" type="text" placeholder="Add Category" name="category" required="">
              <div class="tile-footer  ">
              <button class="btn1 btn-primary bttn" style="float: center;"type="submit">Submit</button>
            </div>
            </div>
         </div>
		    </div>
      </div>
    </div>
@stop