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

	public function store(Request $request)
	{
		try{



		# Recebe informação de Ciclo de Pagamento
			switch ($request->input('cicle-payament')) {
				case '2':
				$validate = date('Y-m-d', strtotime('+365 days'));
				break;
				case '1':
				$validate = date('Y-m-d', strtotime('+90 days'));
				break;
				case '0':
				$validate = date('Y-m-d', strtotime('+30 days'));
				break;
			}

		# Recebe Metodo de Pagamento
			switch ($request->input('method-payments')) {
				case 'method-2':
				$method = 2;
				break;
				case 'method-1':
				$method = 1;
				break;
			}

		# Discript Security Auth
			$key = criptBySystem($request->input('security_key'), 'd');
			$key = explode(":", $key);

			$plan_id = $key[1];
			$client_id = $key[2];

			if(Auth::user()->client_id != $client_id){
				return redirect(route('client-create-invoice', $plan_id))->withErrors(array("type" => "error", "msg" => "Erro, conta invalida"));
			}

		# Busca Cliente
			$client = CLients::where('client_id', Auth::user()->client_id)->first();
		# Busca Plano Selecionado
			$plan = Plans::where('plan_id', $plan_id)->where('status', '1')->first();

		# Verifica Qual Plano o Cliente Está
			$plan_client = PlansClients::where('client_id', $client->client_id)->where('status', '<>', '5')->first();

		# Altera Inforamções desse Plano_Cliente
			$plan_client->plan_id = $plan->plan_id;
			$plan_client->validate = $validate;
			$plan_client->date_recurrent = date("d");
			$plan_client->status = 2;
			$plan_client->save();

			$inovice = Inovices::create([
				'plan_id' 			=> $plan->plan_id,
				'client_id' 		=> $client->client_id,
				'type' 				=> $method,
				'price'				=> $method,
				'gateway' 			=> $method,
				'gateway_key' 		=> $method,
				'gateway_response' 	=> $method,
				'discount_code' 	=> $method,
				'status' 			=> 2,
			]);


			echo $inovice->inovice_id;
			return redirect(route('client-view-invoice', $inovice->inovice_id))->withErrors(array("type" => "success", "msg" => "Fatura Criada Com Sucesso!"));

		//return var_dump($request->all());
		//return var_dump($request->all());
			die;
		}catch(\Exception $e){
			return redirect(route('client-create-invoice', $plan_id))->withErrors(array("type" => "danger", "msg" => "Erro: ".$e->getMessage(). " // Contate o Suporte"));



		}
	}
	public function view(Request $request, $id)
	{
		try{

			$inovice = Inovices::where('inovice_id', $id)->first();
			$client = CLients::where('client_id', Auth::user()->client_id)->first();

			return view("client/pages/signature/view", array(
				"inovice" => $inovice,
				"client" => $client
			));

		}catch(\Exception $e){

			return redirect(route('client-dashboar'))->withErrors(array("type" => "danger", "msg" => "Erro: ".$e->getMessage(). " // Contate o Suporte"));
		}
	}

}