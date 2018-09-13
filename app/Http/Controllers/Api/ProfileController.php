<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

use App\Model\Clients;

use Auth;

class ProfileController extends ClientController
{


	public function uploadPhoto(Request $request, $key)
	{
		$helper = app_path('Helpers/Helper.php');
		if (file_exists($helper)) {
			require_once($helper);
		}

		if($request->hasFile('file')) {

			$user_id =  criptBySystem( $key, 'd' );

			$client = Clients::find($user_id);
			$file = $request->file('file');

			$input['imagename'] = md5(time()).'.'.$file->getClientOriginalExtension();

			$name_img = md5(time()).'.'.$file->getClientOriginalExtension();

			$destinationPath = public_path('/storage');

			$file->move($destinationPath, $input['imagename']);

			$client->image = $name_img;
			$client->save();
		}
		return response()->json("DEU CERTO");
	}
}