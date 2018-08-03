<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

use App\Model\Prospects;
use App\Model\Apresentations;

use Auth;



class ProspectosController extends ClientController
{

	public function pipeline(Request $request)
	{

		$allOn = explode(':', $request->input('EleMentStrutude'));
		$allTwo = explode(':', $request->input('cOntainerStrutude'));

		$prospect_id = $allOn[1];
		$stage =  $allTwo[0];

		$prospect = Prospects::where('prospect_id', $prospect_id)->first();
		$prospect->stage = $stage;
		$prospect->save();


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
			$apresentation_find = Apresentations::where('prospect_id', $request->input('auth'))->first();

			
			$prospect = Prospects::find($request->input('auth'));
			$prospect->stage = 2;
			$prospect->save();

			if (is_null($apresentation_find)) {
				$apresentation = Apresentations::create([
					'client_id' => $client_id,
					'prospect_id' => $request->input('auth'),
					'date' => $date,
					'hour' => $hour,
					'locate' => $request->input('locate'),
					'status' => 1,
				]);

				return 
				response()->
				json(array('result' => "success", 'type' => "create"));
			} else {

				$ApnUpdate = Apresentations::find($apresentation_find->apresentation_id);
				$ApnUpdate->date = $date;
				$ApnUpdate->hour = $hour;
				$ApnUpdate->locate = $request->input('locate');
				$ApnUpdate->status = 4;
				$ApnUpdate->save();
				return 
				response()->
				json(array('result' => "success", 'type' => "update"));

			}
			return 
			response()->
			json(array('result' => "success"));
		} catch (Exception $e) {
			return 
			response()->
			json(array('result' => "error"));
		}
		return 
		response()->
		json(array('result' => "error"));
		
	}
}
