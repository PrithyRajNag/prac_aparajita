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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ambulance', 'AmbulanceController@index')->name('ambulance.index');

Route::get('/bed', 'BedController@index')->name('bed.index');

Route::get('/birth', 'BirthController@index')->name('birth.index');

Route::get('/blood', 'BloodController@index')->name('blood.index');

Route::get('/death', 'DeathController@index')->name('death.index');

Route::get('/department', 'DepartmentController@index')->name('department.index');
