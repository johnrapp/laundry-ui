<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaundrySample extends Model {
    public function days() {
    	return $this->hasMany('App\LaundryDay');
    }
}
