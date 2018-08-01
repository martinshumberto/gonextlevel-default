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

//Route::post('graph',"Api\GraphController@show");
Route::post('states/{code}',"Api\StatesController@show");
Route::post('update/photo/{key}', 'Api\ProfileController@uploadPhoto');