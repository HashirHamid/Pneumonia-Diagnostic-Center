<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;


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
    return view('home');
});

Auth::routes();

Route::get('google-autocomplete', [GoogleController::class, 'index']);

Route::get('/login', 'App\Http\Controllers\UserController@login');
Route::post('/login-user', 'App\Http\Controllers\UserController@loginUser');

Route::get('/signup', 'App\Http\Controllers\UserController@signup');
Route::post('/signup', 'App\Http\Controllers\UserController@save');

Route::get('/logout', 'App\Http\Controllers\UserController@logout');

Route::get('/report', 'App\Http\Controllers\UserController@report');

Route::get('/patientDetails', 'App\Http\Controllers\UserController@patientDetails');

Route::post('/patientDetails', 'App\Http\Controllers\UserController@addPatient');

Route::get('/patientRecord', 'App\Http\Controllers\UserController@patientRecord')->middleware('isLoggedIn')->middleware('admincheck');

Route::get('delete/{id}','App\Http\Controllers\UserController@deletePatient');

Route::get('update/{id}','App\Http\Controllers\UserController@updatePatient');

Route::post('/app/update/{id}', 'App\Http\Controllers\UserController@display')->name('updatePatient');

Route::get('/diagnosis', 'App\Http\Controllers\UserController@diagnosis');
Route::post('/diagnosis', 'App\Http\Controllers\UserController@upload');

Route::get('/upload', 'App\Http\Controllers\UserController@report');

// Route::get('/report1', 'App\Http\Controllers\UserController@report1');


