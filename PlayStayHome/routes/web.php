<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function(){
    $end   = Carbon::parse('2026-03-15');
    $start = Carbon::parse('2026-03-01');

$sum = 0;
$pricePerDay = 100;

foreach (CarbonPeriod::create($start, $end) as $date) {
    if (isWeekend($date)) {
        $sum += $pricePerDay*2;
    } else {
        $sum += $pricePerDay;
    }
}

echo $sum;
});