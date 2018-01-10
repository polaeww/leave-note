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

Route::get('', function () {
    return view('welcome');
});

Route::get('/login','UserController@login')->name('login');
Route::get('/logout','UserController@logout')->name('logout');
Route::post('/login','UserController@auth')->name('auth');

//Admin
Route::get('/layout','LeaveController@layout');
Route::get('/admin/create','AdminController@create')->name('admin.create');
Route::post('/admin/create','AdminController@store')->name('admin.store');

Route::get('/admin','AdminController@sum')->name('admin.sum');
Route::get('/admin/employee/{user}','AdminController@delete')->name('admin.delete');

Route::get('/admin/approve','AdminController@approve')->name('admin.approve');
Route::get('/admin/permission','AdminController@permission')->name('admin.permission');
Route::get('/admin/calendar','AdminController@calendar')->name('admin.calendar');

//Employee
Route::get('/employee/edit','EmployeeController@edit')->name('employee.edit');
Route::post('/employee/edit','EmployeeController@save')->name('employee.save');
Route::get('/employee/index','EmployeeController@index')->name('employee.index');

Route::get('/employee/create','EmployeeController@create')->name('employee.create');
Route::post('/employee/create','AdminController@store')->name('employee.store');

Route::get('/employee/status','EmployeeController@status')->name('employee.status');
Route::get('/employee/roles','EmployeeController@roles')->name('employee.roles');

