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


	Route::get('/testes', array('as' => 'guest-tests', 'uses' => 'TestesController@index'));


	Route::get('/recuperar-senha', array('as' => 'guest-recover', 'uses' => 'LoginController@recover'));
	Route::post('/recuperar-senha', array('as' => 'guest-revoverpw', 'uses' => 'LoginController@revoverpw'));

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
	Route::post('/prospectos/atualizar/dados/{id}', array('as' => 'client-prospect-update', 'uses' => 'ProspectsController@update'));
	Route::post('/prospectos/ver/add/nota/{id}', array('as' => 'client-prospect-note', 'uses' => 'ProspectsController@note'));

	/* Apps */
	Route::get('/agenda', array('as' => 'client-schedule', 'uses' => 'ScheduleController@show'));
	/* Chat em Equipe */
	Route::get('/chats', array('as' => 'client-chat', 'uses' => 'ChatController@index')); 

	/* Signature */
	Route::get('/assinatura/planos', array('as' => 'client-plans', 'uses' => 'PlansController@show'));
	Route::get('/assinatura/fatura', array('as' => 'client-plan-invoice', 'uses' => 'InovicesController@show'));
	Route::get('/assinatura/criar/fatura/{id}', array('as' => 'client-create-invoice', 'uses' => 'InovicesController@inovice'));
	Route::put('/assinatura/gerar/fatura/', array('as' => 'client-generate-inovice', 'uses' => 'InovicesController@store'));
	Route::get('/assinatura/visualizar/fatura/{id}', array('as' => 'client-view-invoice', 'uses' => 'InovicesController@view'));
	Route::get('/assinatura/historico-faturas', array('as' => 'client-historic-invoice', 'uses' => 'InovicesController@historic'));
	Route::get('/assinatura/verificar/{id}', array('as' => 'client-verify', 'uses' => 'InovicesController@verifyInovice'));

	# Visualizar Boleto
	Route::get('/view/boleto/pdf/{id}', array('as' => 'client-view-boleto', 'uses' => 'InovicesController@boleto'));

	# Cria Pagamento com Cartao
	Route::post('/create/auth/credcard', array('as' => 'client-view-credcard', 'uses' => 'InovicesController@CredCard'));

	/* Info Client */
	Route::get('/meus-dados', array('as' => 'client-info', 'uses' => 'ClientsController@info'));
	Route::post('/meus-dados/atualizar', array('as' => 'client-info-update', 'uses' => 'ClientsController@updateInfo'));

	Route::get('/perfil', array('as' => 'client-profile', 'uses' => 'ClientsController@profile'));
	Route::post('/perfil/atualizar', array('as' => 'client-profile-update', 'uses' => 'ClientsController@updateProfile'));
	
	Route::get('/assinaturas', array('as' => 'client-signature', 'uses' => 'ClientsController@index'));
	Route::get('/notificacoes', array('as' => 'client-notifications', 'uses' => 'ClientsController@index'));



	/* Treinamentos */
	Route::get('/treinamentos/convidar', array('as' => 'client-trainings-invite', 'uses' => 'TrainingsController@invite'));  
	Route::get('/treinamentos/apresentar', array('as' => 'client-trainings-presentation', 'uses' => 'TrainingsController@presentation')); 
	Route::get('/treinamentos/acompanhar', array('as' => 'client-trainings-along', 'uses' => 'TrainingsController@along')); 
	Route::get('/treinamentos/fechamento', array('as' => 'client-trainings-closure', 'uses' => 'TrainingsController@closure')); 
	Route::get('/treinamentos/seta', array('as' => 'client-trainings-arrow', 'uses' => 'TrainingsController@arrow')); 
	Route::get('/treinamentos/material', array('as' => 'client-trainings-support', 'uses' => 'TrainingsController@support')); 

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