<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


class HomeController extends ClientController
{

	public function dashboard()
	{
		return view("client/pages/home/index");
	}	

}