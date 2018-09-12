<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


# CLIENTS & PLANS
use App\Model\Clients;
use App\Model\PlansClients;
use App\Model\Plans;
use Auth;


class TrainingsController extends ClientController
{

	# Chave do Modulo
	private $module = "f";
	/* ~~~~ ~~ ~~ ~~ ~~ ~~ ~~ ~~~~ */


	public function invite()
	{
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->where('status', '1')->first();
		if(is_null($plansClient)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Plano em Status pendente, aguarde alteração de status do seu plano!"));
			die;
		}

		$plan = Plans::where('plan_id', $plansClient->plan_id)->first();

		if(!policiesAgent($this->module, $plan->modules)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
			die;
		}

		return view("client/pages/trainings/invite");

	}	

}