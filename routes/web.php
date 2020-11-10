<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Absen;

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
Route::get('/listschedule', 'ViewController@scheduleList')->name('listschedule');
Route::get('/todayschedule', 'ViewController@todaySchedule')->name('todayschedule');

//  CRUD Absen
Route::get('/getabsen', 'CrudController@dataAbsen');
Route::post('/addabsen', 'CrudController@addData');
Route::post('/deleteabsen', 'CrudController@deleteData');
Route::post('/getidabsen', 'CrudController@getIdAbsen');
Route::post('/getidimage', 'CrudController@getIdImage');
Route::post('/editabsen', 'CrudController@editData');

//  CRUD Last Absen
Route::get('/getlastabsen', 'CrudController@dataLastAbsen');


// Export Pdf
Route::get('/pdftoday', 'HomeController@pdfToday')->name('printpdftoday');

Route::get('/date', function () {
    $dataabsen = Absen::where('tanggal', '!=',  Date('Y-m-d'))->get();
    dd($dataabsen);
});
