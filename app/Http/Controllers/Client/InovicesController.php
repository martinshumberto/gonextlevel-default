<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Model\Plans;
use App\Model\PlansClients;
use App\Model\Inovices;
use App\Model\Clients;
use Auth;


class InovicesController extends ClientController
{

	public function show()
	{
		return view("client/pages/signature/invoice");

	}	

	public function inovice(Request $request, $id)
	{
		
		$plan = Plans::where('status', '1')->where('plan_id', $id)->first();
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$planClient = PlansClients::where('status', '1')->where('client_id', $client->client_id)->first();

		$key = $plan->price() . ":" . $plan->plan_id . ":" . $client->client_id;
		$key_auth = criptBySystem($key, 'e');
		
		return view("client/pages/signature/invoice", array(
			"plan" => $plan,
			"planClient" => $planClient,
			"client" => $client,
			"key_auth" => $key_auth,
		));
	}

}