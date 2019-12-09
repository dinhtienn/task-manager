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

Route::get('/employee/homepage', [
    'as' => 'employee.homepage',
    'uses' => 'EmployeeController@homepage'
]);
