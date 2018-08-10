<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


class PlansController extends ClientController
{

	public function show()
	{
		return view("client/pages/signature/plans");

	}	

}