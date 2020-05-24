<?php

namespace App;
use App\Image;
use App\Activity;
use App\Transfer;
use App\Cruise;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

	
	 protected $fillable = [
        'fkey', 'name', 'src',
    ];
     public function activity_image(){
    	 return $this->belongsTo(Activity::class,'id');
    }

    public function transfer_image(){
    	 return $this->belongsTo(Transfer::class,'fkey');
    }

    public function cruise_image(){
    	 return $this->belongsTo(Cruise::class,'fkey');
    }
}
