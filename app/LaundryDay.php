<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaundryDay extends Model {
	public function sample() {
		return $this->belongsTo('App\LaundrySample');
	}
	public function bookings() {
    	return $this->hasMany('App\LaundryBooking');
	}
}
