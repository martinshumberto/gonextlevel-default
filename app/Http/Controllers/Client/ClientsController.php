<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientController;
use Carbon\Carbon;
use Illuminate\Http\Request;


use App\Http\Requests;

use App\Model\Clients;
use App\Model\States;
use App\Model\Cities;
use App\Model\ActivityLog;
use App\Model\Prospects;
use Auth;

#MOIP REQUIRE
use Moip\Moip;
use Moip\Auth\BasicAuth;

class ClientsController extends ClientController
{

	private $token = 'QRCHHIZYDFJPASWASI1DUC7FZ0UGH3ZO';
	private $key = 'AM7AS2B66JSB882MNCDPA9TQUDCY128ADKSQAQ2M';

	public function profile()
	{	


		$helper = app_path('Helpers/Helper.php');
		if (file_exists($helper)) {
			require_once($helper);
		}



		$client_id = Auth::user()->client_id;
		$usuario = Clients::where('client_id', $client_id)->first();
		$states = States::orderBy("name", "ASC")->get();

		$client_id = criptBySystem($client_id, 'e');

		$cities = Cities::where("states_id", $usuario->states_id)->get();

		# Atividades Recents
		$activits = ActivityLog::where('client_id', $usuario->client_id)->orderBy('activity_id', 'DESC')->take(8)->get();

		# Conta Prospects 
		$cadastros = Prospects::where('client_id', $usuario->client_id)
		->count();

		$captados = Prospects::where('client_id', $usuario->client_id)
		->where('status', "3")
		->count(); 

		return view("client/pages/clients/profile", array(
			"states"    => $states,
			"client" => $usuario,
			"client_id" => $client_id,
			"cities" => $cities,
			"activits" => $activits,
			"cadastros" => $cadastros,
			"captados" => $captados,

		));
	}

	public function info()
	{

		$client_id = Auth::user()->client_id;
		$usuario = Clients::where('client_id', $client_id)->first();
		$states = States::orderBy("name", "ASC")->get();

		$cities = Cities::where("states_id", $usuario->states_id)->get();

		return view("client/pages/clients/info", array(
			"states"    => $states,
			"client" => $usuario,
			"cities" => $cities,
		));
	}

	public function updateInfo(Request $request)
	{

		# Debu
		echo "<pre>";

		# Instacia Moip
		$moip = new Moip(new BasicAuth($this->token, $this->key), Moip::ENDPOINT_SANDBOX);
		
		# Busca Client
		$client = Clients::where('client_id', Auth::user()->client_id)->first();


		try{

			if($client->status == 0){
				$request->merge(array(
					'status' => 1));

				# Atualza Informa????es Necess??rias
				$client->update($request->all());

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
				->setOwnId($client->client_id)
				->setFullname($client->name)
				->setEmail($client->email)
				->setBirthDate($birthdate)
				->setTaxDocument($cpf)
				->setPhone($ddd, $phone)
				->addAddress('BILLING',
					'Rua Pernambuco', 133,
					'Centro Sul', 'Varzea Grande', 'MT',
					'78135595', 8)
				->create();

				# DEBUG CLIENT
				echo "<pre>";
				$response = json_encode($customer);
				$response = json_decode($response);

				$client->moip_id = $response->id;
				$client->save();
				
			}else{
				
				# Atualza Informa????es Necess??rias
				$client->update($request->all());
				
			}		

			return redirect(route('client-info'))->withErrors(array("type" => "success", "msg" => "Informacoes atualizada com sucesso!"));

		}catch(\Exception $e){
			return redirect(route('client-info'))->withErrors(array("type" => "danger", "msg" => "Erro: ".$e->getMessage(). " // Contate o Suporte"));
		}

	}	

	public function updateProfile(Request $request)
	{
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		# Atualza Informa????es Necess??rias
		$client->update($request->all());
		return redirect(route('client-profile'))->withErrors(array("type" => "success", "msg" => "Informacoes atualizada com sucesso!"));
	}

}
