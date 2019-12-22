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

use App\Bike;
use App\Manufacturer;
use App\Custom;

Route::get('/', function () {
    $customs = Custom::limit(6)->orderby('id', 'desc')->get();
    return view('welcome', ['customs' => $customs]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('custom', 'CustomController', ['only' => ['create', 'store', 'edit']]);

Route::get('/custom/create/bike', function() {
    return Bike::all();
});

Route::get('/custom/create/manufacturer', function() {
    return Manufacturer::all();
});