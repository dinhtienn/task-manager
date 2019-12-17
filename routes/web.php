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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'as' => 'auth.login',
    'uses' => 'AuthController@showLogin'
]);
Route::post('/auth/login', [
    'as' => 'auth.login',
    'uses' => 'AuthController@postLogin'
]);



Route::get('/ceo/homepage', [
    'as' => 'ceo.homepage',
    'uses' => 'CeoController@homepage'
]);



Route::get('/manager/homepage', [
    'as' => 'manager.homepage',
    'uses' => 'ManagerController@homepage'
]);
Route::get('/manager/profile', [
    'as' => 'manager.profile',
    'uses' => 'ManagerController@profile'
]);
Route::get('/manager/listEmployee', [
    'as' => 'manager.listEmployee',
    'uses' => 'ManagerController@listEmployee'
]);
Route::get('/manager/job', [
    'as' => 'manager.job',
    'uses' => 'ManagerController@job'
]);
Route::get('/manager/punish', [
    'as' => 'manager.punish',
    'uses' => 'ManagerController@punish'
]);
Route::get('/manager/kpi', [
    'as' => 'manager.kpi',
    'uses' => 'ManagerController@kpi'
]);
Route::get('/manager/listEmployee/employeeProfile', [
    'as' => 'manager.employeeProfile',
    'uses' => 'ManagerController@employeeProfile'
]);



Route::get('/employee/homepage', [
    'as' => 'employee.homepage',
    'uses' => 'EmployeeController@homepage'
]);
Route::get('/employee/profile', [
    'as' => 'employee.profile',
    'uses' => 'EmployeeController@profile'
]);
Route::get('/employee/job', [
    'as' => 'employee.job',
    'uses' => 'EmployeeController@job'
]);
Route::get('/employee/punish', [
    'as' => 'employee.punish',
    'uses' => 'EmployeeController@punish'
]);
Route::get('/employee/kpi', [
    'as' => 'employee.kpi',
    'uses' => 'EmployeeController@kpi'
]);
Route::get('/employee/job/report-daily', [
    'as' => 'employee.job.report-daily',
    'uses' => 'EmployeeController@reportDaily'
]);
Route::get('/employee/job/done', [
    'as' => 'employee.job.done',
    'uses' => 'EmployeeController@doneJob'
]);
Route::get('/employee/job/edit', [
    'as' => 'employee.job.edit',
    'uses' => 'EmployeeController@editJob'
]);
Route::get('/employee/job/read', [
    'as' => 'employee.job.read',
    'uses' => 'EmployeeController@readReport'
]);
