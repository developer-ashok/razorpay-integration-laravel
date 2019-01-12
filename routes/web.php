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

// route for to show payment form using get method
Route::get('pay', 'RazorpayController@pay')->name('pay');

// route for make payment request using post method
Route::post('dopayment', 'RazorpayController@dopayment')->name('dopayment');