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

/*Route::get('/', function () {

   App\Event :: create([

    'nom' => 'Adjobi',
    'description'     => 'Aventure',
    'location'      => 'Abidjan koumassi',
    'price'      => 20

     ]);

});*/

Route::get('/', function () {

    $events = App\Event :: all();


    return view('events.index')->withEvents($events);
});

