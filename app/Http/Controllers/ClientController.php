<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;

use App\Model\ActivityLog;
use App\Model\Clients;

$helper = app_path('Helpers/Helper.php');
if (file_exists($helper)) {
	require_once($helper);
}

class ClientController extends Controller
{
	public function __construct(Request $request)
	{
		
	}  
}
