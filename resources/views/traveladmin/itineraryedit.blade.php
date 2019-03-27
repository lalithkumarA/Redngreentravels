@extends('traveladmin.travellayout.master')
@section('app-title')
EditItinerary
@stop
@section('breadcrumb-item')
EditItinerary
@stop
@section('content')
<div class="title-form ">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="tile">
                            <div class="form-group">
                                <form action="{{ url('itineraryupdate').'/'.$details->id}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label class="control-label-form">Select Category</label>
                                    <select name="category[]" class="form-control form-control-lg" required multiple>
                                        @foreach($catagories as $category)
                                        <option value="{{$category->id}}"
                                                @foreach($details->multicatagories as $multicatagoryData)
                                            {{ $category->id==$multicatagoryData->category_id?'selected':'' }}
                                            @endforeach
                                            
                                            >{{$category->category}}</option>
                                        @endforeach
                                    </select><br>
                                    <label class="control-label-form">Select Category</label>
                                    <br><br>
                                    Domestic <input class="form-control form-control-lg" id="inputLarge" name="type"
                                        type="radio" value="Domestic"
                                        {{$details->type == 'Domestic' ? 'checked' : '' }}>
                                    International <input class="form-control form-control-lg" id="inputLarge" name="type"
                                        type="radio" value="International"
                                        {{ $details->type == 'International' ? 'checked' : '' }}>
                                    <br>
                                    <label class="control-label-form">Do you want to set it as trending?</label>
                                    <br><br>
                                    Yes <input class="form-control form-control-lg" id="inputLarge" name="trending"
                                        type="radio" value="yes" {{$details->trending == 'yes' ? 'checked' : '' }}>
                                    No <input class="form-control form-control-lg" id="inputLarge" name="trending" type="radio"
                                        value="no" {{ $details->trending == 'no' ? 'checked' : '' }}>
                                    <br>
                                    <label class="control-label-form">Package Name</label>
                                    <input class="form-control form-control-lg" id="inputLarge" name="packagename" type="text"
                                        value="{{ $details->packagename }}" required>
                                    <label class="control-label-form">Departure</label>
                                    <input class="form-control form-control-lg" id="inputLarge" name="date" type="Date"
                                        value="{{$details->date}}">
                                    <label class="control-label-form">Cost</label>
                                    <input class="form-control form-control-lg" id="cost" name="cost" type="text"
                                        placeholder="Cost" value="{{$details->cost}}" required>
                                    <label class="control-label-form">Package Excludes </label>
                                    <textarea class="form-control form-control-lg" id="inputLarge" name="package_excludes"
                                        rows="6" cols="80" value="" required>{{$details->Package_Excludes}}
                                    </textarea>
                                    <label class="control-label-form">Package Includes </label>
                                    <textarea class="form-control form-control-lg" id="inputLarge" name="package_includes"
                                        rows="6" cols="80" value="" required>{{$details->Package_includes}}</textarea>
                                    <label class="control-label-form">Terms and conditions </label>
                                    <textarea class="form-control form-control-lg" id="inputLarge" name="terms_and_conditions"
                                        rows="6" cols="80" style="padding-bottom: -2px;" value="">{{$details->Terms_and_conditions}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="tile">
                            <label class="control-label-form">Duration</label>
                            <input class="form-control form-control-lg" id="inputLarge" name="duration" type="text"
                                placeholder="" value="{{$details->duration}}" required>
                            <label class="control-label-form"> Highlights</label>
                            <textarea class="form-control form-control-lg" id="inputLarge" name="highlights" rows="5"
                                cols="80" required>{{$details->highlights}}</textarea>
                            <label class="control-label-form">Itinerary</label><br>
                            <br>
                            <textarea class="form-control form-control-lg" id="article-ckeditor" name="itinerary" rows="5"
                                cols="80" required>{{$details->itinerary}}</textarea>
                            <label class="control-label-form">Over view</label>
                            <input class="form-control form-control-lg" id="inputLarge" name="overview" type="text"
                                placeholder="" value="{{$details->overview}}" required>
                            <?php if(!empty($details->complementary)){
                                    $ComplementaryDatas = array_values(unserialize($details->complementary));
                                }else{
                                    $ComplementaryDatas='';
                                }
                                ?>
                            <label class="control-label-form">Complementary</label><br><br>
                            @foreach(@$complementary as $complementaries)
                            <img src="{{ url($complementaries->image_name)}}" class="img1" alt="gallery">
                            <input type="checkbox" name="complementary[]" value="{{$complementaries->id}}" class="form-controlform-control-lg"
                                {{ (!empty($ComplementaryDatas))? ((in_array($complementaries->id, $ComplementaryDatas))?'checked':''):'' }}>
                            @endforeach
                            <br>
                        </div>
                    </div>
                </div>
                <center>
                    <div class="tile-photo">
                        <div class="form-group btn-container">
                            <input type="file" name="images[]" id="files" class="btn btn-primary" multiple>
                        </div>
                    </div>
                </center>
                <div class="tile-footer">
                    <button class="btn1 btn-primary bttn" type="submit" id="submit">Update</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="row">
        @foreach($details->images as $image)
        <div class="tile">
            <div class="embed-responsive">
                <center><img class="img" src="{{ url($image->image_name) }}" alt="gallery"></center><br>
                <form action="{{ url('/imagedelete').'/'.$image->id}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');

    </script>
    @endsection
