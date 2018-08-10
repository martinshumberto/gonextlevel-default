<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;


class ScheduleController extends ClientController
{

	public function show()
	{
		return view("client/pages/apps/schedule");

	}	

}