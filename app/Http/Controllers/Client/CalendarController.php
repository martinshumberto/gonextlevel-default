<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


class CalendarController extends ClientController
{

	public function show()
	{
		return view("client/pages/apps/calendar");

	}	

}