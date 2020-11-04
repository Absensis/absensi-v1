<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@homeView')->name('home');
Route::get('/about', 'HomeController@aboutView')->name('about');
Route::get('/listschedule', 'HomeController@scheduleList')->name('listschedule');
Route::get('/todayschedule', 'HomeController@todaySchedule')->name('todayschedule');

//  CRUD
Route::get('/getabsen', 'HomeController@dataAbsen');
Route::post('/addgoods', 'HomeController@addData');
