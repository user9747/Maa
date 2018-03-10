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
<<<<<<< fd30a8006a56a58223123ab5f1c523831cd9d823
Route::post('/women_update','WomenController@update')->name('women_update');
=======
Route::post('/women_update','WomenController@update')->name('stream');
Route::get('/wdashboard', 'WomenController@dashboard')->name('wdashboard');
>>>>>>> something
