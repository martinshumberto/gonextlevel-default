<?php
namespace App\Http\Controllers\Guest;
use App\Http\Controllers\GuestController;
use App\Model\Clients;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;


class LoginController extends GuestController
{

	public function index()
	{
		return view("guest/pages/home/login");
	}	

	public function login(Request $request) {

		# Verifica se é Email ou Login
		$field = filter_var($request->input('user-email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		if($field == 'email'){
			if (Auth::guard('home')->attempt(['email' => $request->input('user-email'), 'password' => $request->input('password')])) {

				if((Auth::user()->status == 0) OR (Auth::user()->status == 1) OR (Auth::user()->status == 2)){
					return redirect()->intended(route('client-dashboard'));
				}else if(Auth::user()->status == 3){
					return redirect(route('guest-login'))->withErrors(array("type" => "error", "msg" => "Seu cadastro foi desativado!"));
				}else if(Auth::user()->status == 4){
					return redirect(route('guest-login'))->withErrors(array("type" => "error", "msg" => "Seu cadastro foi Bloqueado!"));
				}				
			}
		}else if($field == 'username'){
			if (Auth::guard('home')->attempt(['login' => $request->input('user-email'), 'password' => $request->input('password')])) {

				if((Auth::user()->status == 0) OR (Auth::user()->status == 1) OR (Auth::user()->status == 2)){
					return redirect()->intended(route('client-dashboard'));
				}else if(Auth::user()->status == 3){
					return redirect(route('guest-login'))->withErrors(array("type" => "error", "msg" => "Seu cadastro foi desativado!"));
				}else if(Auth::user()->status == 4){
					return redirect(route('guest-login'))->withErrors(array("type" => "error", "msg" => "Seu cadastro foi Bloqueado!"));
				}				
			}
		}
		return redirect(route('guest-login'))->withErrors(['Login Falhou, verifique suas informações!', 'error']);
	}

	public function recover()
	{
		return view("guest/pages/home/recover");
	}

	public function revoverpw()
	{
		
	}


}