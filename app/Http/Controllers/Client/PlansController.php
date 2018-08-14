<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use App\Model\Plans;
use Auth;

use App\Model\PlansClients;

class PlansController extends ClientController
{

	public function show()
	{
		$plans = Plans::where('status', '1')->orderBy('plan_id', 'ASC')->take(3)->get();
		$planClient = PlansClients::where('status', '1')->where('client_id', Auth::user()->client_id)->first();
		$total = count($plans);

		if(is_null($planClient)){		
			PlansClients::create([
				'plan_id' => 1,
				'client_id' => Auth::user()->client_id,
				'validate' => date('Y-m-d', strtotime('+15 days')),
				'date_recurrent' => date('d'),
				'status' => 1
			]);
		}
		$planClient = PlansClients::where('status', '1')->where('client_id', Auth::user()->client_id)->first();

		return view("client/pages/signature/plans", array(
			"plans" => $plans,
			"total" => $total,
			"planClient" => $planClient,
		));

	}	

}