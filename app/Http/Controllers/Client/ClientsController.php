<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientController;
use Carbon\Carbon;
use Illuminate\Http\Request;


use App\Http\Requests;

use App\Model\Clients;
use App\Model\States;
use Auth;

#MOIP REQUIRE
use Moip\Moip;
use Moip\Auth\BasicAuth;

class ClientsController extends ClientController
{

	private $token = 'U7UTQTPXDYZVFNXDWNKUXFFWKBB0EPA6';
	private $key = 'CFLJ745JZ3OKMOSZEAUUJGP3UY5EEIZABZRXJUGX';

	public function index()
	{	


		$helper = app_path('Helpers/Helper.php');
		if (file_exists($helper)) {
			require_once($helper);
		}

		$client_id = Auth::user()->client_id;
		$usuario = Clients::where('client_id', $client_id)->first();
		$states = States::orderBy("name", "ASC")->get();

		$client_id = criptBySystem($client_id, 'e');

		return view("client/pages/clients/index", array(
			"states"    => $states,
			"client" => $usuario,
			"client_id" => $client_id
		));
	}

	public function info()
	{

		$client_id = Auth::user()->client_id;
		$usuario = Clients::where('client_id', $client_id)->first();
		$states = States::orderBy("name", "ASC")->get();

		return view("client/pages/clients/info", array(
			"states"    => $states,
			"client" => $usuario
		));
	}

	public function update(Request $request)
	{
		$moip = new Moip(new BasicAuth($this->token, $this->key), Moip::ENDPOINT_SANDBOX);

		try{
			$create_moip = 0;

		# Info Client
			$client = Clients::where('client_id', Auth::user()->client_id)->first();

			if($client->status == 0){
				$request->merge(array(
					'status' => 1));
				$create_moip = 1;
			}

			$client->update($request->all());

			$client = Clients::where('client_id', $client->client_id)->first();
			if($create_moip == 1){

		 	# Formatar Data de Aniversario
				$birthdate = Carbon::createFromFormat('d/m/Y', $client->birthdate)->format('Y-m-d');
			# Retira Pontos de CPF
				$cpf = preg_replace("/[^0-9]/", "", $client->cpf);
			# Recebe Telefone
				$phone = preg_replace("/[^0-9]/", "", $client->phone);
				$ddd = substr($phone, 0, 2);
				$phone = substr($phone, 2);		

			# Cria um Cliente dentro do MOIP
				$customer = $moip->customers()->setOwnId(uniqid())
				->setFullname($client->name)
				->setEmail($client->email)
				->setBirthDate($birthdate)
				->setTaxDocument($cpf)
				->setPhone($ddd, $phone)
				->addAddress('BILLING',
					$client->address, $client->number,
					$client->district, $client->citie->name, $client->state->code,
					$client->zipcode, 8)
				->create();

			# DEBUG CLIENT
				// echo "<pre>";
				// print_r($customer);
				// die;

				$client->moip_id = $customer->id;
				$client->save();

			}

			return redirect(route('client-info'))->withErrors(array("type" => "success", "msg" => "Informacoes atualizada com sucesso!"));

		}catch(\Exception $e){
			return redirect(route('client-info'))->withErrors(array("type" => "danger", "msg" => "Erro: ".$e->getMessage(). " // Contate o Suporte"));
		}

	}	

}
