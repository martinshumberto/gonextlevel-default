<?php

/*
|--------------------------------------------------------------------------
| Guest Routs
|--------------------------------------------------------------------------
*/

Route::namespace('Guest')->group(function () {
	App::setLocale('pt');
	Route::get('/', array('as' => 'guest-login', 'uses' => 'LoginController@index'));
	Route::get('/cadastro', array('as' => 'guest-register', 'uses' => 'LoginController@create'));	
});
/*
|--------------------------------------------------------------------------
| Client Routs
|--------------------------------------------------------------------------
*/

Route::prefix('painel')->namespace('Client')->group(function () {
	App::setLocale('pt');
	Route::get('/', array('as' => 'client-dashboard', 'uses' => 'HomeController@dashboard'));
});



