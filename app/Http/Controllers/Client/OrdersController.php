<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


class OrdersController extends ClientController
{

	public function show()
	{
		return view("client/pages/signature/invoice");

	}	

}