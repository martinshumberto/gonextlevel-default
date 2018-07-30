<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


class ProspectsController extends ClientController
{

	public function index()
	{
		return view("client/pages/prospects/index");
	}		
	public function pirpeline()
	{
		return view("client/pages/prospects/pirpeline");
	}	


}