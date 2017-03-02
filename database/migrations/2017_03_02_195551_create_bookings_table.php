<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('time');
            $table->integer('numberOfBookings');

            $table->foreign('day_id')
                ->references('id')->on('days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('bookings');
    }
}

/*

Data:
Tvättdata
{
  date: 2016/02/01,
  house: casa|gamla,
  times: [
    (startTime): 00|01|...|23
  ]
  days: {
    date: 6/2
    weekday: måndag,
    bookings: [{
      (numberOfBookings): 0|1|2
    }]
  }
}
Vår data
{
  bookings: {
    date: 12 Feb
    hour: 13:00
  }
}

*/
