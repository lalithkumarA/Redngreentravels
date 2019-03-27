<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multicategory extends Model
{
    public function categories(){
    	return $this->hasOne(Category::class,'id','category_id');
    }


    public function category(){
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function CatagoryData(){
    	return $this->hasOne(Category::class,'id','category_id');
    }

    public function itinery(){
    	return $this->hasMany(Additinerary::class,'id','itinery_id');
    }

    public function itineryData(){
    	return $this->hasOne(Additinerary::class,'id','itinery_id');
    }


    public function images(){
    	return $this->hasMany(Image::class,'additineraries_id','id');
    }

    public function image(){
    	return $this->hasOne(Image::class,'id','itinery_id');
    }

    public function Attributeimage(){
    	return $this->hasOne(Image::class,'additineraries_id','id');
    }
    
}
