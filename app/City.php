<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class City extends Model {
	protected $table      = 'cities';
	protected $foreignKey = 'fkey';
	protected $fillable   = [
		'fkey', 'name', 'of',
	];

	public function activity_city() {
		return $this->hasMany('App\Activity', "fkey", "id");
	}
}
