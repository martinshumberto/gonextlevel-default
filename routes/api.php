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



Route::post('prospectos/auth/pipeline',"Api\ProspectosController@pipeline");
Route::post('prospectos/auth/cadastro', 'Api\ProspectosController@create');
Route::post('prospectos/auth/apn', 'Api\ProspectosController@apresentation');
Route::post('prospectos/auth/graph/{id}',"Api\ProspectosController@graphDashboard");

//Route::post('graph',"Api\GraphController@show");
Route::post('states/{code}',"Api\StatesController@show");
Route::post('update/photo/{key}', 'Api\ProfileController@uploadPhoto');

// Inovices
Route::post('inovices/auth/discount', 'Api\InovicesController@discount');


Route::post('agenda/auth/show/{auth}', 'Api\ScheduleController@index');
