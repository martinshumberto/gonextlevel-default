<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;

use App\Model\Plans;
use App\Model\PlansClients;
use App\Model\Inovices;
use App\Model\Clients;
use App\Model\Discounts;
use App\Model\DiscountsClients;
use Auth;

#MOIP REQUIRE
use Moip\Moip;
use Moip\Auth\BasicAuth;

class InovicesController extends ClientController
{

	private $token = 'QRCHHIZYDFJPASWASI1DUC7FZ0UGH3ZO';
	private $key = 'AM7AS2B66JSB882MNCDPA9TQUDCY128ADKSQAQ2M';

	public function show()
	{
		return view("client/pages/signature/invoice");

	}	

	public function historic()
	{
		return view("client/pages/signature/historic-invoice");

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

			echo "<pre>";

			$moip = new Moip(new BasicAuth($this->token, $this->key), Moip::ENDPOINT_SANDBOX);


			# Discript Security Auth
			$key = criptBySystem($request->input('security_key'), 'd');
			$key = explode(":", $key);

			# Variaveis Criptgrafada
			$plan_id = $key[1];
			$client_id = $key[2];


			# Busca Plano Selecionado
			$plan = Plans::where('plan_id', $plan_id)->where('status', '1')->first();

			# Verifica se Usuário e o mesmo que está logado.
			if(Auth::user()->client_id != $client_id){
				return redirect(route('client-create-invoice', $plan_id))->withErrors(array("type" => "error", "msg" => "Erro, conta invalida"));
			}
			# Busca Cliente
			$client = Clients::where('client_id', $client_id)->first();

			$price = $plan->price;

			if($request->input('discount')){
				$discount = Discounts::where('discount_code', $request->input('discount'))->first();

				if(!is_null($discount)){

					if($discount->type == 1){
						$descount_value = ($plan->price*$discount->value/100);
						$price = ($price - $descount_value);
					}

					if($discount->type == 2){
						$price = ($plan->price - $discount->value);
					}

					DiscountsClients::create([
						'discount_id' 		=> $discount->discount_id,
						'client_id' 		=> $client->client_id,
						'plan_id' 			=> $plan->plan_id,
						'discount_code'		=> $discount->discount_code,
						'discount_type' 	=> $discount->type,
						'discount_price' 	=> $discount->value,
						'status' 			=> 1
					]);

					$discount_code = $discount->discount_code;

				}else{
					$discount_code = NULL;
				}				

			}else{
				$discount_code = NULL;
			}


			if($request->input('cicle-payament')){

				if($request->input('cicle-payament') == "1"){					
					$validate = date('Y-m-d', strtotime('+30 days'));
					$cicle = "1 Mês";
				}

				if($request->input('cicle-payament') == "2"){					
					$validate = date('Y-m-d', strtotime('+3 Month'));
					$cicle = "3 Meses";
					$price = ($price * 3);
					$desconto = ($price * 0.05);
					$price = ($price - $desconto);

				}

				if($request->input('cicle-payament') == "3"){					
					$validate = date('Y-m-d', strtotime('+12 Month'));
					$cicle = "1 Ano";
					$price = ($price * 12);
					$desconto = ($price * 0.15);
					$price = ($price - $desconto);
				}
				
			}

			if($request->input('method-payments')){
				$method = $request->input('method-payments');
				switch ($method) {
					case 'method-1':
					$type = 1;
					break;
					case 'method-2':
					$type = 2;
					$logo_uri = 'https://cdn.moip.com.br/wp-content/uploads/2016/05/02163352/logo-moip.png';
					$instruction_lines = ['Atenção,', 'fique atento à data de vencimento do boleto.', 'Pague em qualquer casa lotérica.'];
					$expiration_date = date('Y-m-d', strtotime('+3 days'));
					break;
				}
			}


			# Cria a Fatura no Banco de Dados
			$inovice = Inovices::create([
				'plan_id' 			=> $plan->plan_id,
				'client_id' 		=> $client->client_id,
				'type' 				=> $type,
				'price'				=> $price,
				'gateway' 			=> 'MOIP',
				'discount_code' 	=> $discount_code,
				'status' 			=> 1
			]);

			# Procura Plano de Cliente
			$plan_client = PlansClients::where('client_id', $client->client_id)->first();

			# Altera Inforamções desse Plano_Cliente
			$plan_client->plan_id = $plan->plan_id;
			$plan_client->validate = $validate;
			$plan_client->date_recurrent = date("d");
			$plan_client->status = 2;
			$plan_client->save();


			# Informação de Ordem
			$item_cart_text = "Mensalidae Plataforma *Go Next Level* - " . $cicle;

			$price = (int) $price;
			$order = $moip->orders()->setOwnId($inovice->inovice_id)
			->addItem("Descrição do pedido",1, $item_cart_text, $price)
			->setShippingAmount(0)->setAddition(0)->setDiscount(0)
			->setCustomerId($client->moip_id)
			->create();

			print_r($order);
			die;

			
			if($type == 1){


				$payment = $order->payments()  
				->setBoleto($expiration_date, $logo_uri, $instruction_lines)
				->setStatementDescriptor("Go Next Level")
				->execute();
				print_r($payment);
			}
			
			if($type == 2){
				$payment = $order->payments()  
				->setBoleto($expiration_date, $logo_uri, $instruction_lines)
				->execute();
				print_r($payment);
			}


			die;


			echo $inovice->inovice_id;
			return redirect(route('client-view-invoice', $inovice->inovice_id))->withErrors(array("type" => "success", "msg" => "Fatura Criada Com Sucesso!"));

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