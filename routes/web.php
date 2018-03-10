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
Route::post('/women_update','WomenController@update')->name('women_update');
Route::get('/wdashboard', 'WomenController@dashboard')->name('wdashboard');
Route::get('/forum','PostController@index')->name('forum');
Route::get('/forum/create', 'PostController@create');
Route::post('/forum/create', 'PostController@store')->name('create_post');
Route::get('/forum/{post}','PostController@show');
Route::get('/scheme','SchemeController@scheme');
Route::get('/scheme/create', function () {
    return view('scheme.create');
});
Route::post('/scheme/create', 'SchemeController@store')->name('create_scheme');
Route::get('/scheme/{scheme_id}','SchemeController@show');
Route::get('/meetup','MeetUpController@index');
Route::get('/meetup/create', function () {
    return view('meetups.create');
});
Route::post('/meetup/create', 'MeetUpController@store')->name('create_meetup');
Route::get('/meetup/{meetup_id}','MeetUpController@show');
