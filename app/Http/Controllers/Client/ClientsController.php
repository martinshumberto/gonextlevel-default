<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientController;

use Illuminate\Http\Request;


use App\Http\Requests;

use App\Model\Clients;
use App\Model\States;
use Auth;

class ClientsController extends ClientController
{

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
	public function update(Request $request)
	{

		#Adicionar em All
		// $request->merge(array(
		// 	'status' => 2));

		$client = Clients::find(Auth::user()->client_id);
		$client->update($request->all());

		return redirect(route('client-profile'));
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


}
