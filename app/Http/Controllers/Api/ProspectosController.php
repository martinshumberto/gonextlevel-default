<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;



class ProspectosController extends ClientController
{

  public function pipeline(Request $request)
  {

  		return response()->json($request);

  }
  public function create(Request $request)
  {

  }
}
