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

Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
Route::prefix('doctor')->group(function ()
{
    Route::get('/list','DoctorController@index')->name('doctor.list');
    Route::post('/save','DoctorController@save')->name('doctor.save');
    Route::post('/update','DoctorController@update')->name('doctor.update');
    Route::post('/delete','DoctorController@delete')->name('doctor.delete');
});

Route::prefix('patient')->group(function ()
{
    Route::get('/list','PatientController@index')->name('patient.list');
    Route::get('/add_patient','PatientController@addView')->name('patient.addView');
    Route::post('/save','PatientController@save')->name('patient.save');
});

Route::prefix('work_item')->group(function ()
{
    Route::get('/list','WorkController@index')->name('work_item.list');
    Route::post('/save','WorkController@save')->name('work_item.save');
    Route::post('/update','WorkController@update')->name('work_item.update');
    Route::post('/delete','WorkController@delete')->name('work_item.delete');
});

Route::prefix('tooth_shade')->group(function ()
{
    Route::get('/list','ShadeController@index')->name('tooth_shade.list');
    Route::post('/save','ShadeController@save')->name('tooth_shade.save');
    Route::post('/update','ShadeController@update')->name('tooth_shade.update');
    Route::post('/delete','ShadeController@delete')->name('tooth_shade.delete');
});

Route::prefix('qr-code')->group(function () {
      
    Route::get('/generate','QrcodeController@index')->name('Qrcode.generate');
    Route::post('/print','QrcodeController@display')->name('Qrcode.display');
    
      
  });
