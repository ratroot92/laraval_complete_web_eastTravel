<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;
use App\Activity;
class File extends Model
{


	 protected $fillable = [
        'fkey', 'name', 'src',
    ];



    public function activity_file(){
    	 return $this->belongsTo(Activity::class,'id','fkey');
    }

    public function transfer_file(){
    	 return $this->belongsTo(File::class,'fkey');
    }

     public function cruise_file(){
    	 return $this->belongsTo(File::class,'fkey');
    }


}
