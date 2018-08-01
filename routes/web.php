<?php

/*
|--------------------------------------------------------------------------
| Guest Routs
|--------------------------------------------------------------------------
*/

Route::namespace('Guest')->group(function () {
	App::setLocale('pt');
	Route::get('/', array('as' => 'guest-login', 'uses' => 'LoginController@index'));
	Route::post('/auth', ['as' => 'guest-auth','uses' => 'LoginController@login']);

	Route::get('/cadastro', array('as' => 'guest-register', 'uses' => 'RegisterController@show'));	
	Route::post('/cadastro', array('as' => 'guest-register-create', 'uses' => 'RegisterController@create'));

});
/*
|--------------------------------------------------------------------------
| Client Routs
|--------------------------------------------------------------------------
*/

Route::prefix('painel')->middleware('client')->namespace('Client')->group(function(){

	/* Logout */	
	Route::get('/logout', array('as' => 'client-logout', 'uses' => 'HomeController@logout'));

	/* Dashboard */
	Route::get('/', array('as' => 'client-dashboard', 'uses' => 'HomeController@dashboard'));

	/* Prospects */
	Route::get('/prospectos/visao-geral', array('as' => 'client-prospect', 'uses' => 'ProspectsController@index'));
	Route::get('/prospectos/cadastrar', array('as' => 'client-prospect-create', 'uses' => 'ProspectsController@create'));
	Route::get('/prospectos/pirpeline', array('as' => 'client-prospect-pirpeline', 'uses' => 'ProspectsController@pirpeline'));
	Route::get('/prospectos/relatorios', array('as' => 'client-prospect-reports', 'uses' => 'ProspectsController@report'));

	/* Info Client */
	Route::get('/meus-dados', array('as' => 'client-info', 'uses' => 'ClientsController@index'));

	Route::get('/perfil', array('as' => 'client-profile', 'uses' => 'ClientsController@index'));
	Route::post('/perfil/atualizar', array('as' => 'client-profile-update', 'uses' => 'ClientsController@index'));

	Route::get('/assinaturas', array('as' => 'client-singatures', 'uses' => 'ClientsController@index'));

	Route::get('/notificacoes', array('as' => 'client-notifications', 'uses' => 'ClientsController@index'));

});



