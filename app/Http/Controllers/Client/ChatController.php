<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


# CLIENTS & PLANS
use App\Model\Clients;
use App\Model\PlansClients;
use App\Model\Plans;
use Auth;


class ChatController extends ClientController
{

	# Chave do Modulo
	//private $module = "g";
	private $module = "a";
	/* ~~~~ ~~ ~~ ~~ ~~ ~~ ~~ ~~~~ */


	public function index()
	{
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->first();
		$plan = Plans::where('plan_id', $plansClient->plan_id)->first();

		if(!policiesAgent($this->module, $plan->modules)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
			die;
		}

		return view("client/pages/apps/chat");

	}	

}