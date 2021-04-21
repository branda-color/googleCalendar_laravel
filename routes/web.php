<?php

use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;


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

Route::get('api', function () {

    $e = Event::get();

    dd($e);
});

Route::get('apiadd', function () {

    $event = new Event;

    //Event::create(['name' => 'test', 'startDateTime' => Carbon::createFromDate(2021, 4, 22), 'endDateTime' =>  Carbon::createFromDate(2021, 4, 22)]);

    $event->name = 'apitest';

    $event->startDateTime = Carbon::createFromDate(2021, 4, 26);

    $event->endDateTime = Carbon::createFromDate(2021, 4, 26);

    $event->addAttendee(['email' => 'wishcolor0770@gmail.com']);

    $event->save();

    //Event::create(['name' => 'new', 'startDateTime' => Carbon::now(), 'endDateTime' => Carbon::now()->addHour(),]);
    $e = Event::get();
    dd($e);
});

Route::get('test', function () {
    $t = Carbon::now();
    $time = new Carbon('2021-04-15 11:53:20');
    $n = Carbon::now();
    $m = Carbon::create($time->year, $time->month, $time->day, 8, 0, 0);
    var_dump($time);
    var_dump($n);
});
