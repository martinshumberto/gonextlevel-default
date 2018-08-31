<?php

namespace App\Http\Controllers\Guest;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestesController extends Controller {

	public function index(){

		$data = array('name'=>"Virat Gandhi");
		Mail::send('templates.emails.welcome', $data, function($message) {
			$message->to('abc@gmail.com', 'Tutorials Point')->subject
			('Laravel HTML Testing Mail');
			$message->from('xyz@gmail.com','Virat Gandhi');
		});
		echo "HTML Email Sent. Check your inbox.";
	}

}

