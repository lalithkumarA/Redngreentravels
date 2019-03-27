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
        return view('travel.contact');
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
        return view('travel.index');
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
}
