<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


# CLIENTS & PLANS
use App\Model\Clients;
use App\Model\PlansClients;
use Auth;


class ScheduleController extends ClientController
{

	public function show()
	{
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->first();

		if(($plansClient->plan_id == "1")){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
		}

		return view("client/pages/apps/schedule");

	}	

}