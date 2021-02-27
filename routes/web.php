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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ambulance', 'AmbulanceController@index')->name('ambulance.index');

Route::get('/assign-bed', 'Bed\AssignBedController@index')->name('bed.index');

Route::get('/bed-type', 'Bed\BedTypeController@index')->name('bed.bed_type.index');

Route::get('/bed-list', 'Bed\BedListController@index')->name('bed.bed_list.index');

Route::get('/birth', 'BirthController@index')->name('birth.index');

Route::get('/blood-donor', 'Blood\BloodDonorController@index')->name('blood_donor.index');

Route::get('/blood/input', 'Blood\BloodInputController@index')->name('blood_input.index');

Route::get('/blood/output', 'Blood\BloodOutputController@index')->name('blood_output.index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

Route::get('/death', 'DeathController@index')->name('death.index');





//Route::get('department/show', 'DepartmentController@show')->name('department.show');

Route::post('/department/store', 'DepartmentController@store')->name('department.store');

Route::get('/department', 'DepartmentController@index')->name('department.index');

Route::get('/department/{department}', 'DepartmentController@show')->name('department.show');
Route::put('/department/{department}/update', 'DepartmentController@update')->name('department.update');
Route::delete('/department/{department}/destroy', 'DepartmentController@destroy')->name('department.destroy');






Route::get('/doctor', 'Doctor\DoctorController@index')->name('doctor.index');

Route::get('/doctor/appointment', 'Doctor\DoctorAppointmentController@index')->name('doctor_appointment.index');
