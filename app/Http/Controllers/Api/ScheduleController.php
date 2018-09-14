<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;


class ScheduleController extends ClientController
{

  public function index($code)
  {

  	$events = array(
  		array("title" => "APN - Caio", "start" => "2018-09-14 13:55", "end" => "2018-09-14 20:55"),
  		
  	);

  	return $events;

  }
}