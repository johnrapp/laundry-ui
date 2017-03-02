<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaundryBooking extends Model {
	public function day() {
		return $this->belongsTo('App\LaundryDay');
	}
}
