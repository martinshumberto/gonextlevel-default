<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

use App\Model\Prospects;

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
		json("SUCESSO");

	}
}
