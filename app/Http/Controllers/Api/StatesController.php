<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

use App\Model\Cities;


class StatesController extends ClientController
{

  public function show($code)
  {

  	$cities = Cities::where('states_id', $code)->get();

    return response()->json($cities);
  }
}
