<?php

namespace App;
use App\Activity;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='cities';
    protected $foreignKey = 'fkey';
	protected $fillable = [
        'fkey', 'name', 'of',
    ];



     public function activity_city(){
    	 return $this->belongsTo('App\Activity',);
    }
}
