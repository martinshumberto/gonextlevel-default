<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\ClientController;

use App\Model\Prospects;
use App\Model\Apresentations;
use App\Model\Clients;

use Auth;
use App\Model\ActivityLog;

use DateTime;
use DatePeriod;
use DateInterval;



class ProspectosController extends ClientController
{

	public function pipeline(Request $request)
	{

		$client_id =  criptBySystem( $request->input('auth'), 'd' );
		$allOn = explode(':', $request->input('EleMentStrutude'));
		$allTwo = explode(':', $request->input('cOntainerStrutude'));

		$prospect_id = $allOn[1];
		$stage =  $allTwo[0];

		$prospect = Prospects::where('prospect_id', $prospect_id)->where('client_id', $client_id)->first();
		$prospect->stage = $stage;
		$prospect->save();

		switch ($stage) {
			case 1:
			$stage_offset = 'Convidar';
			break;
			case 2:
			$stage_offset = 'Apresentar';
			break;
			case 3:
			$stage_offset = 'Acompanhar';
			break;
			case 4:
			$stage_offset = 'Fechamento';
			break;
		}

		# Registra Log de Atividade de Usuário
		ActivityLog::create([
			'client_id' => $client_id,
			'text' => 'Prospecto Movido para '.$stage_offset,
			'ip' => $_SERVER["REMOTE_ADDR"],
			'action' => 'PP:M:'.$prospect->prospect_id,
		]);



		return response()->json($request);

	}
	public function create(Request $request)
	{

		$client_id =  criptBySystem( $request->input('key'), 'd' );

		$prospect = Prospects::create([
			'client_id' => $client_id,
			'name' => $request->input('name'),
			'phone' => $request->input('phone'),
			'email' => $request->input('email'),
			'network' => $request->input('network'),
			'credibility' => $request->input('credibility'),
			'entrepreneur' => $request->input('entrepreneur'),
			'energy' => $request->input('energy'),
			'dreamer' => $request->input('dreamer'),
			'resource' => $request->input('resource'),
			'contact' => $request->input('contact'),
			'status' => 1,
			'stage' => 1
		]);

		# Registra Log de Atividade de Usuário
		ActivityLog::create([
			'client_id' => $client_id,
			'text' => 'Novo prospecto cadastrado',
			'ip' => $_SERVER["REMOTE_ADDR"],
			'action' => 'P:C:'.$prospect->prospect_id,
		]);

		return 
		response()->
		json(array('result' => "success"));

	}
	public function apresentation(Request $request)
	{
		$client_id =  criptBySystem( $request->input('key'), 'd' );
		try{
			# Recebe Valores de Informacoes
			$date = str_replace("/", "-", $request->input('date'));
			$date = date('Y-m-d', strtotime($date));
			$hour = date('H:i:s', strtotime($request->input('hour')));

			# Verifica se ja tem apresetação marcada
			$apresentation_find = Apresentations::where('prospect_id', $request->input('auth'))
			->where('status', 1)->where('client_id', $client_id)->get();

			$count = $apresentation_find->count();
			if ($count == 0) {
				$apresentation = Apresentations::create([
					'client_id' => $client_id,
					'prospect_id' => $request->input('auth'),
					'date' => $date,
					'hour' => $hour,
					'locate' => $request->input('locate'),
					'status' => 1,
				]);

				# Registra Log de Atividade de Usuário
				ActivityLog::create([
					'client_id' => $client_id,
					'text' => 'Nova Apresentacao cadastrado',
					'ip' => $_SERVER["REMOTE_ADDR"],
					'action' => 'A:C:'.$apresentation->apresentation_id,
				]);

				$Prospecto = Prospects::find($request->input('auth'));
				$Prospecto->stage = 2;
				$Prospecto->save();

				# Registra Log de Atividade de Usuário
				ActivityLog::create([
					'client_id' => $client_id,
					'text' => 'Prospecto movido para Apresentacao',
					'ip' => $_SERVER["REMOTE_ADDR"],
					'action' => 'PP:M:'.$Prospecto->prospect_id,
				]);

				return 
				response()->
				json(array('result' => "success", 'type' => "create"));
			}else{

				# Altera a ultima apresentacao marcada para cancelada
				foreach ($apresentation_find as $key => $value) {
					$ApnUpdate = Apresentations::find($value->apresentation_id)->where('status', 1)->first();
					$ApnUpdate->status = 2;
					$ApnUpdate->save();

					# Registra Log de Atividade de Usuário
					$prospect = ActivityLog::create([
						'client_id' => $client_id,
						'text' => 'Apresentacao alterada',
						'ip' => $_SERVER["REMOTE_ADDR"],
						'action' => 'A:U:'.$ApnUpdate->apresentation_id,
					]);
				}
				$apresentation = Apresentations::create([
					'client_id' => $client_id,
					'prospect_id' => $request->input('auth'),
					'date' => $date,
					'hour' => $hour,
					'locate' => $request->input('locate'),
					'status' => 1,
				]);

				# Registra Log de Atividade de Usuário
				ActivityLog::create([
					'client_id' => $client_id,
					'text' => 'Nova Apresentacao cadastrado',
					'ip' => $_SERVER["REMOTE_ADDR"],
					'action' => 'A:C:'.$apresentation->apresentation_id,
				]);

				$Prospecto = Prospects::find($request->input('auth'));
				$Prospecto->stage = 2;
				$Prospecto->save();

				# Registra Log de Atividade de Usuário
				ActivityLog::create([
					'client_id' => $client_id,
					'text' => 'Prospecto movido para Apresentacao',
					'ip' => $_SERVER["REMOTE_ADDR"],
					'action' => 'PP:M:'.$Prospecto->prospect_id,
				]);

				return 
				response()->
				json(array('result' => "success", 'type' => "update"));
			}


		} catch (Exception $e) {
			return 
			response()->
			json(array('result' => "error"));
		}
		return 
		response()->
		json(array('result' => "error"));
		
	}

	public function graphDashboard(Request $request, $id)
	{	
		$client_id =  criptBySystem( $id, 'd' );

		# Buscando Cliente
		$client = Clients::where('client_id', $client_id)->first();


		$startDate = strtotime($client->created_at);
		$endDate   = strtotime(date("Y-m-d"));

		$currentDate = $endDate;

		$meses = array();
		$cadastros = array();
		$apresentacoes = array();


		while ($currentDate >= $startDate) {

			$mes = getMonth(date('m',$currentDate));
			
			# Contar Numero de Prospect por Mês
			$mes_atual = date('m',$currentDate);

			$cad = Prospects::where('client_id', $client_id)
			->whereMonth('created_at', $mes_atual)
			->where('stage', '4')
			->count();
			$cadastros[] = $cad;

			$apn = Prospects::where('client_id', $client_id)
			->whereMonth('created_at', $mes_atual)
			->where('stage', '2')
			->count();
			$apresentacoes[] = $apn;
			


			$meses[] = $mes;
			//echo getMonth(date('m',$currentDate));
			$currentDate = strtotime( date('Y/m/01/',$currentDate).' -1 month');
		}


		$apns = Prospects::where('stage', '2')->where('client_id', $client_id)->count();
		$cads = Prospects::where('stage', '4')->where('client_id', $client_id)->count();

		$media = 0;

		if(($apns != 0) && ($cads != 0)){
			$media = ($apns / $cads);	
			$media = round($media);	

		}





		return 
		response()->
		json(
			array("meses" => $meses, 
				"cadastro" => $cadastros,
				"apresentacao" => $apresentacoes,
				"medias" => $media
			));
	}
}
