<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;

use App\Http\Requests;


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