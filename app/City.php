<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class City extends Model {
	protected $table      = 'cities';
	protected $foreignKey = 'fkey';
	protected $fillable   = [
		'fkey', 'name', 'of',
	];

	public function activities() {
		return $this->belongsToMany('App\Activity');
	}

}
