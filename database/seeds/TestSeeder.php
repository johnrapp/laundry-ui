<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('laundry_samples')->insert([
            'house' => 'casa',
            'date' => new DateTime()
        ]);

        $sampleId = DB::table('laundry_samples')->get()->first()->id;

        DB::table('laundry_days')->insert([
            'date' => date("Y-m-d H:i:s"),
            'weekday' => 0,
            'laundry_sample_id' => $sampleId
        ]);

        DB::table('laundry_days')->insert([
            'date' => date("Y-m-d H:i:s"),
            'weekday' => 1,
            'laundry_sample_id' => $sampleId
        ]);

        $day1Id = DB::table('laundry_days')->get()->first()->id;
        $day2Id = DB::table('laundry_days')->get()->last()->id;

        DB::table('laundry_bookings')->insert([
            'time' => 00,
            'numberOfBookings' => 1,
            'laundry_day_id' => $day1Id
        ]);
        DB::table('laundry_bookings')->insert([
            'time' => 01,
            'numberOfBookings' => 0,
            'laundry_day_id' => $day1Id
        ]);

        DB::table('laundry_bookings')->insert([
            'time' => 12,
            'numberOfBookings' => 1,
            'laundry_day_id' => $day2Id
        ]);
        DB::table('laundry_bookings')->insert([
            'time' => 13,
            'numberOfBookings' => 1,
            'laundry_day_id' => $day2Id
        ]);

    }
}
