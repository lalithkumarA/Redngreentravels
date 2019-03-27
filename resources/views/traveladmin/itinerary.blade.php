@extends('traveladmin.travellayout.master')

@section('app-title')
AddItinerary
@stop

@section('breadcrumb-item')
AddItinerary
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
                                <form action="{{route('itinerary_insert')}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label class="control-label-form">Select Category</label>
                                    <select name="category[]" class="form-control form-control-lg" required="" multiple>
                                        @foreach($select as $type)
                                        <option value="{{$type->id}}">{{$type->category}}</option>
                                        @endforeach
                                    </Select><br>
                                    <label class="control-label-form">Select Category</label>
                                    <br><br>
                                    Domestic <input class="form-control form-control-lg" name="type" type="radio" value="Domestic"
                                        checked>

                                    International <input class="form-control form-control-lg" name="type" type="radio"
                                        value="International">
                                    <br>

                                    <label class="control-label-form">Do you want to set it as trending?</label>
                                    <br><br>
                                    Yes <input class="form-control form-control-lg" value="yes" id="inputLarge" name="trending"
                                        type="radio" required>
                                    No <input class="form-control form-control-lg" value="no" id="inputLarge" name="trending"
                                        type="radio" required>
                                    <br>


                                    <label class="control-label-form">Package Name</label>
                                    <input class="form-control form-control-lg" id="inputLarge" name="packagename" type="text"
                                        placeholder="Enter Your Package Name" required>

                                    <label class="control-label-form">Departure</label>
                                    <input class="form-control form-control-lg" id="inputLarge" name="date" type="Date">

                                    <label class="control-label-form">Cost</label>
                                    <input class="form-control form-control-lg" id="inputLarge" name="cost" type="text"
                                        placeholder="Cost" required>

                                    <label class="control-label-form">Package Excludes </label>
                                    <textarea class="form-control form-control-lg" id="inputLarge" name="package_excludes"
                                        rows="6" cols="80" required></textarea>

                                    <label class="control-label-form">Package includes</label>
                                    <textarea class="form-control form-control-lg" id="inputLarge" name="package_includes"
                                        rows="6" cols="80" required></textarea>

                                    <label class="control-label-form">Terms and conditions </label>
                                    <textarea class="form-control form-control-lg" id="inputLarge" name="terms_and_conditions"
                                        rows="5" cols="80" style="padding-bottom: -2px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="tile">
                            <label class="control-label-form">Duration</label>
                            <input class="form-control form-control-lg" id="inputLarge" name="duration" type="text"
                                placeholder="" required>

                            <label class="control-label-form"> Highlights</label>
                            <textarea class="form-control form-control-lg" id="inputLarge" name="highlights" rows="5"
                                cols="80" required></textarea>

                            <label class="control-label-form">Itinerary</label><br>
                            <br>
                            <textarea class="form-control form-control-lg" id="article-ckeditor" name="itinerary" rows="5"
                                cols="80"></textarea>

                            <label class="control-label-form">Over view</label>
                            <input class="form-control form-control-lg" id="inputLarge" name="overview" type="text"
                                placeholder="" required>

                            <label class="control-label-form">complementary</label><br><br>
                            @foreach($complementary as $complementaries)
                            <img src="{{ url($complementaries->image_name) }}" class="img1" alt="gallery">
                            <input type="checkbox" name="complementary[]" value="{{$complementaries->id}}" class="form-controlform-control-lg">
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


                </center>
                <div class="tile-footer">
                    <button class="btn1 btn-primary bttn" type="submit">Submit</button>
                </div>
            </div>
        </div>

        </form>
    </div>
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('article-ckeditor');

</script>

@stop
