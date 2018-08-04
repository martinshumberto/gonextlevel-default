<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;


class HomeController extends AdminController
{

	public function dashboard()
	{
		return view("admin/pages/home/index");
	}	


}