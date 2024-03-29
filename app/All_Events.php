<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Country;
use App\Category;
use App\Image;
use App\File;
class All_Events extends Model
{
    public $table         = 'all__events';
	protected $primaryKey = 'id';

    public function GetActivityCity(){
        return $this->belongsToMany(City::class,'city_all__events','all__events_id','city_id');
    }

    public function GetActivityCountry(){
        return $this->belongsToMany(Country::class,'country_all__events','all__events_id','country_id');
    }


    public function GetActivityCategory(){
        return $this->belongsToMany(Category::class,'category_all__events','all__events_id','category_id');
    }
    public function GET_Images() {
		return $this->hasMany(Image::class, 'fkey', 'id');
	}

    public function GET_Files() {
		return $this->hasMany(File::class, 'fkey', 'id');
	}
}
