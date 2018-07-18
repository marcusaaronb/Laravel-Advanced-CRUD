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
    return view('students.index');
});

// Basic Routes
Route::get('employees', 'EmployeeController@index');
Route::get('employees/create', 'EmployeeController@create');
Route::post('employees', 'EmployeeController@store');
Route::get('employees/{id}/edit', 'EmployeeController@edit');
Route::put('employees/{id}', 'EmployeeController@update');
Route::delete('employees/{id}', 'EmployeeController@destroy');

// Advance Routes
Route::resource('students', 'StudentController');
Route::get('students_data/get_data', 'StudentGetController@index');
