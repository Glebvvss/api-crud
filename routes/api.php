<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/vacancy', 'VacancyController@getList');
Route::get('/vacancy/{id}', 'VacancyController@get');
Route::post('/vacancy', 'VacancyController@create');
Route::put('/vacancy', 'VacancyController@update');
Route::delete('/vacancy/{id}', 'VacancyController@delete');

Route::get('/employer', 'EmployerController@getList');
Route::get('/employer/{id}', 'EmployerController@get');
Route::post('/employer', 'EmployerController@create');
Route::put('/employer', 'EmployerController@update');
Route::delete('/employer/{id}', 'EmployerController@delete');