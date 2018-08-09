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

Route::prefix('apps')->middleware('client')->namespace('Client')->group(function(){

	/* Logout */	
	Route::get('/logout', array('as' => 'client-logout', 'uses' => 'HomeController@logout'));

	/* Dashboard */
	Route::get('/', array('as' => 'client-dashboard', 'uses' => 'HomeController@dashboard'));

	/* Prospects */
	Route::get('/prospectos/visao-geral', array('as' => 'client-prospect', 'uses' => 'ProspectsController@index'));
	Route::get('/prospectos/cadastrar', array('as' => 'client-prospect-create', 'uses' => 'ProspectsController@create'));
	Route::get('/prospectos/pipeline', array('as' => 'client-prospect-pipeline', 'uses' => 'ProspectsController@pipeline'));
	Route::get('/prospectos/relatorios', array('as' => 'client-prospect-reports', 'uses' => 'ProspectsController@report'));
	Route::get('/prospectos/arquivar/{id}', array('as' => 'client-prospect-archivament', 'uses' => 'ProspectsController@archivament'));
	Route::get('/prospectos/apagar/{id}', array('as' => 'client-prospect-trash', 'uses' => 'ProspectsController@trash'));
	Route::get('/prospectos/ver/{id}', array('as' => 'client-prospect-view', 'uses' => 'ProspectsController@ViewProspect'));

	/* Apps */
	Route::get('/apps/calendar', array('as' => 'client-calendar', 'uses' => 'CalendarController@show'));


	/* Info Client */
	Route::get('/meus-dados', array('as' => 'client-info', 'uses' => 'ClientsController@index'));
	Route::get('/perfil', array('as' => 'client-profile', 'uses' => 'ClientsController@index'));
	Route::post('/perfil/atualizar', array('as' => 'client-profile-update', 'uses' => 'ClientsController@index'));
	Route::get('/assinaturas', array('as' => 'client-singatures', 'uses' => 'ClientsController@index'));
	Route::get('/notificacoes', array('as' => 'client-notifications', 'uses' => 'ClientsController@index'));

});
/*
|--------------------------------------------------------------------------
| Admin Routs
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->namespace('Admin')->group(function(){

	/* Dashboard */
	Route::get('/', array('as' => 'admin-dashboard', 'uses' => 'HomeController@dashboard'));

});