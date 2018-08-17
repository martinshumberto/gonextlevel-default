<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Model\Plans;
use App\Model\PlansClients;
use App\Model\Inovices;
use App\Model\Clients;
use App\Model\Discounts;
use App\Model\DiscountsClients;


use Auth;


class InovicesController extends ClientController
{

	public function discount(Request $request)
	{

		$key_auth =  criptBySystem( $request->input('key'), 'd' );
		$key_auth = explode(':', $key_auth);

		# Variaveis
		$price = $key_auth[0];
		$plan_id = $key_auth[1];
		$client_id = $key_auth[2];
		$code = $request->input('code');

		try{

			$discountsClients = DiscountsClients::
			where('client_id', $client_id)
			->where('discount_code', $code)
			->where('status', '1')
			->first();

			if(!is_null($discountsClients)){
				return 
				response()->
				json(array('result' => "registered"));
				die;
			}

			$discount = Discounts::where('status', '1')->where('discount_code', $code)->first();
			$plan = Plans::where('status', '1')->where('plan_id', $plan_id)->first();
			
			if(is_null($discount)){
				return 
				response()->
				json(array('result' => "invalid"));
				die;
			}

			if($discount->validate != ""){
				$todays_date = date("Y-m-d"); 
				$today = strtotime($todays_date);
				$expiration_date = strtotime($discount->validate); 
				if($expiration_date < $today){
					return 
					response()->
					json(array('result' => "expired"));
					die;
				}
			}

			return 
			response()->
			json(array('result' => "success", 'discount_type' => $discount->type, 'discount_price' => $discount->value, 'price' => $plan->price));
			die();

		}catch (Exception $e) {
			return 
			response()->
			json(array('result' => "error"));
		}



	}	
}