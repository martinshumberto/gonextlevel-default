<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\GuestController;


class LoginController extends GuestController
{

	public function index()
	{
		return view("guest/pages/home/login");
	}	

	public function create()
	{
		return view("guest/pages/home/register");
	}

}