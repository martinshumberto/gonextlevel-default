<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;


class InovicesController extends ClientController
{

	public function show()
	{
		return view("client/pages/signature/invoice");

	}	

	public function inovice(Requests $request)
	{
		echo $request->input('id');
		die;
		return view("client/pages/signature/invoice");
	}

}