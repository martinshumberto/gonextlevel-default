<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use Auth;
use App\Model\CLients;
use App\Model\ActivityLog;
use App\Model\Prospects;
use App\Model\PlansClients;
use Illuminate\Http\Request;

use App\Http\Requests;


class HomeController extends ClientController
{

	public function dashboard()
	{

		$client_id = Auth::user()->client_id;
		$client = CLients::where('client_id', $client_id)->first();

		$plansClients = PlansClients::where('client_id', $client->client_id)->first();

		# Atividades Recents
		$activits = ActivityLog::where('client_id', $client_id)->orderBy('activity_id', 'DESC')->take(4)->get();

		/*
		Grafico de Prospects
		*/

		$convidar 		= Prospects::where('stage', '1')
		->where('client_id', $client->client_id)
		->get()->count();

		$apresentar 	= Prospects::where('stage', '2')
		->where('client_id', $client->client_id)
		->get()->count();

		$acompanhar 	= Prospects::where('stage', '3')
		->where('client_id', $client->client_id)
		->get()->count();

		$fechamento 	= Prospects::where('stage', '4')
		->where('client_id', $client->client_id)
		->get()->count();


		$grafico = [
			'convidar' => [
				'quantidade' => $convidar,
				'percent' => 0,
			],
			'apresentar' => [
				'quantidade' => $apresentar,
				'percent' => 0,
			],
			'acompanhar' => [
				'quantidade' => $acompanhar,
				'percent' => 0,
			],
			'fechamento' => [
				'quantidade' => $fechamento,
				'percent' => 0,
			]
		];


		return view("client/pages/home/index", array(
			"client"    		=> $client,
			"activits"    		=> $activits,
			"grafico" 			=> $grafico,
			"plansClients" 		=> $plansClients,
		));

		}	

		public function logout(){
			Auth::logout();
			return redirect(route('guest-login'))->withErrors(array("type" => "error", "msg" => "Você saiu do sistema!"));
		}

}