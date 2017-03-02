<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

	$sample = App\LaundrySample::with('days', 'days.bookings')->first();
	//$days = App\LaundryDay::all();
	//$days = $sample->days()->with('bookings')->get();
	//$days = $sample->days()->get()->map(function($item, $key) {
		//$item->bookings = $item->bookings()->get();
	//	return $item;
	//});

	$bookings = App\LaundryBooking::all();

	//return $sample->toJson();
	return response()->json([
		'sample' => $sample,
	//	'days' => $days,
	//	'bookings' => $days->first()->bookings()->get()
	]);
});

