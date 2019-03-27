<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;   
use App\Additinerary; 
use App\Image;
use App\Complementaries;
use App\Mail;
use App\Multicategory;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function About(){
        return view('travel.about');
    }

    public function Why(){
        return view('travel.why-us');
    }

    public function Tour(){
        return view('travel.tour-packages');
    }

    public function Assistance(){
        return view('travel.assistance');
    }

    public function Contact(){
        $trending=Additinerary::inRandomOrder()->limit(9)->get();
        return view('travel.contact',compact('trending'));
    }

    public function Corporatetours(){
        return view('travel.corporatetours');
    }

    public function Demo(){
        return view('travel.demo');
    }

    public function Eurail(){
        return view('travel.eurail');
    }

    public function Flight(){
        return view('travel.flight');
    }

    public function Index(){
        $trending=Additinerary::inRandomOrder()->limit(9)->get();
        return view('travel.index',compact('trending'));
    }

    public function Insurance(){
        return view('travel.insurance');
    }

    public function Business(){
        return view('travel.business');
    }

    public function Passportservices(){
        return view('travel.passportservices');
    }

    public function additineraritePackage($additineraries,$catagory = null){
        $Additinerary= Additinerary::findOrfail($additineraries);
        $catagories=Category::where('category',$catagory)->first();
        $RandomDatas = Multicategory::where([['itinery_id','!=',$additineraries],['category_id','=',@$catagories->id]])->inRandomOrder()->limit(3)->get();
        $Images= Image::where('additineraries_id',$Additinerary->id)->get();
        return view('travel.package',compact('Additinerary','Images','RandomDatas','Additineries'));
    }


    public function PackageCatagoryList($catagory){
        $catagories=Category::where('category',$catagory)->first();
        if (!empty($catagories)) {
            // $Additineries = Multicategory::where('category_id',$catagories->id)->paginate(9);
            return view('travel.specialpackages',compact('catagories'));
        }else{
            return redirect('/package');
        }
        
    }

    public function getFilterData(Request $request){
        if(request('FilterType') == 'all'){
            $Products =  DB::table('multicategories')->where([['multicategories.category_id',request('catagoryId')]])->join('additineraries','multicategories.itinery_id','=','additineraries.id')->paginate(9);
        }else if(request('FilterType') != 'all'){
            $Products =  DB::table('multicategories')->where([['additineraries.type',request('FilterType')],['multicategories.category_id',request('catagoryId')]])->join('additineraries','multicategories.itinery_id','=','additineraries.id')->paginate(9);
        }
        $output = '';
        if(!empty($Products)){
            foreach ($Products as $key => $Product) {
                if(!empty($Product)){                    
                    $CatagoryData = Category::findOrfail($Product->category_id);
                    $ProductImage= Image::where('additineraries_id',$Product->id)->first();
                    $output .= ' <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
                    <div class="container11" onclick="window.location.href ='."'".url("/package/".$Product->id .'/'.$CatagoryData->category)."'".'">'.'<a href ='."'".url("/package/".$Product->id .'/'.$CatagoryData->category)."'".'>'.
                    '<img src="'.url($ProductImage->image_name).'" alt="'.@$Product->highlights.'" class="image">
                    <div class="overlay1">'.
                    ' <p class="pric">'. @$Product->packagename.'</p><h6 class="h7"> ₹ '.@$Product->cost.'</h6>'.
                    '</div></a></div></div>';
                }
            }
         return $output; 
        } else{
            return '';
        }
    }
}
