<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additinerary extends Model
{
    
    public function categories(){
    	return $this->hasOne(Category::class,'id','category_id');
    }


    public function category(){
    	return $this->belongsTo(Category::class,'category_id','id');
    }


    public function images(){
    	return $this->hasMany(Image::class,'additineraries_id','id');
    }

    public function image(){
    	return $this->hasOne(Image::class,'additineraries_id','id');
    }

    public function multicatagory(){
    	return $this->hasOne(Multicategory::class,'itinery_id','id');
    }

    public function multicatagories(){
    	return $this->hasMany(Multicategory::class,'itinery_id','id');
    }


    public function CatagoryData(){
    	return $this->hasOne(Category::class,'id','category_id');
    }

}