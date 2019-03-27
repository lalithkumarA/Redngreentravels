@extends('traveladmin.travellayout.master')
@section('app-title')
Add Complementary
@stop
@section('breadcrumb-item')
Add Complementary
@stop
@section('content')
<form action="{{ route('addcomplementary') }}" method="post" enctype="multipart/form-data">
	@csrf
<div class="title-form">
        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="col-lg-12">
                 <label class="control-label-form"> Add Complementary</label>
                  <input class="form-control" id="inputLarge" type="file" 
                  name="images[]" multiple>
              <div class="tile-footer  ">
              <button class="btn1 btn-primary bttn" style="float: center;"type="submit">Submit</button>
            </div>
            </div>
         </div>
		    </div>
      </div>
    </div>
  </form>
@endsection