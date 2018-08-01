<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\GuestController;
use App\Model\Clients;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

class RegisterController extends GuestController
{


    public function show()
    {
        return view("guest/pages/home/register");
    }

    public function create(Request $request)
    {

        try{

            if($request->input('password') != $request->input('re-password')){
                return redirect(route('guest-register'))->withErrors(array("type" => "error", "msg" => "As senhas não conferem!"));
                die;
            }
            
            $prospect = Clients::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'hinode_id' => $request->input('hinode_id'),
                'password' => $request->input('password'),
                'phone' => $request->input('phone'),
                'status' => 0
            ]);

            if (Auth::guard('home')->attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'status' => 0])) {

                return redirect()->intended(route('client-dashboard'));
            }
        }catch(\Exception $e){
           return redirect(route('guest-register'))->withErrors(array("type" => "danger", "msg" => "Erro: ".$e->getMessage(). " // Contate o Suporte"));



       }
   }

}