<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use Auth;
use App\Model\CLients;
use App\Model\ActivityLog;


class HomeController extends ClientController
{

	public function dashboard()
	{

		$client_id = Auth::user()->client_id;
		$client = CLients::where('client_id', $client_id)->first();

		# Atividades Recents
		$activits = ActivityLog::where('client_id', $client_id)->orderBy('activity_id', 'DESC')->take(4)->get();

		return view("client/pages/home/index", array(
			"client"    => $client,
			"activits"    => $activits,
		));

	}	

	public function logout(){
		Auth::logout();
		return redirect(route('guest-login'))->withErrors(array("type" => "error", "msg" => "Você saiu do sistema!"));
	}


}