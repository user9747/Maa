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

Auth::routes();
Route::get('/women_details', function () {
    return view('women_details');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stream', 'HomeController@index')->name('stream');
Route::post('/women_update','WomenController@update')->name('stream');
Route::get('/wdashboard', 'WomenController@dashboard')->name('wdashboard');
