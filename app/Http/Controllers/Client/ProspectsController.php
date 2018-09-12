<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Prospects;
use App\Model\Apresentations;

use DB;

# CLIENTS & PLANS
use App\Model\Clients;
use App\Model\PlansClients;
use App\Model\Plans;
use Auth;

class ProspectsController extends ClientController
{

	# Chaves do Modulo
	private $module 			= "a";
	private $reportProspect		= "d";
	/* ~~~~ ~~ ~~ ~~ ~~ ~~ ~~ ~~~~ */


	public function index(Request $request)
	{

		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->where('status', '1')->first();
		if(is_null($plansClient)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Plano em Status pendente, aguarde alteração de status do seu plano!"));
			die;
		}

		$plan = Plans::where('plan_id', $plansClient->plan_id)->first();

		if(!policiesAgent($this->module, $plan->modules)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
			die;
		}


		$client_id = Auth::user()->client_id;
		$prospects = Prospects::orderBy("prospect_id", "DESC")->where('client_id', $client_id);
        # ID USER
		$prospects->where('client_id', $client_id);


        # Selecao de Busca
		if($request->input('name')){
			$prospects->where('name', 'like', '%'.$request->input('name').'%');
		}

		if($request->input('stage')){
			$prospects->where('stage', $request->input('stage'));
		}

		if($request->input('status')){
			$prospects->where('status', $request->input('status'));
		}


		if($request->input('date-interval')){
			$date = explode('-', $request->input('date-interval'));

			$from = str_replace("/", "-", $date[0]);
			$from = date('Y-m-d H:i:s', strtotime($from));

			$to = str_replace("/", "-", $date[1]);
			$to = date('Y-m-d H:i:s', strtotime($to));

			$prospects->whereBetween('created_at', array($from, $to));
		}


		return view("client/pages/prospects/index", array(
			"prospects" => $prospects->paginate(30)
		));

	}		
	public function pipeline()
	{
		
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->where('status', '1')->first();
		if(is_null($plansClient)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Plano em Status pendente, aguarde alteração de status do seu plano!"));
			die;
		}

		$plan = Plans::where('plan_id', $plansClient->plan_id)->first();

		if(!policiesAgent($this->module, $plan->modules)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
			die;
		}
		# Listagem apenas de alguns status
		$wherIn = [1,3,4];

		# Coluna de Convites
		$prospect_convit = Prospects::orderBy("prospect_id", "DESC");
		$prospect_convit->where('client_id', Auth::user()->client_id);
		$prospect_convit->whereIn('status', $wherIn);
		$prospect_convit =  $prospect_convit->where('stage', 1)->take(24)->get();

		# Coluna de Convites
		$prospect_show = Prospects::orderBy("prospect_id", "DESC");
		$prospect_show->where('client_id', Auth::user()->client_id);
		$prospect_show->whereIn('status', $wherIn);
		$prospect_show =  $prospect_show->where('stage', 2)->take(24)->get();

		# Coluna de Convites
		$prospect_mananger = Prospects::orderBy("prospect_id", "DESC");
		$prospect_mananger->where('client_id', Auth::user()->client_id);
		$prospect_mananger->whereIn('status', $wherIn);
		$prospect_mananger =  $prospect_mananger->where('stage', 3)->take(24)->get();

		# Coluna de Convites
		$prospect_close = Prospects::orderBy("prospect_id", "DESC");
		$prospect_close->where('client_id', Auth::user()->client_id);
		$prospect_close->whereIn('status', $wherIn);
		$prospect_close =  $prospect_close->where('stage', 4)->take(24)->get();



		return view("client/pages/prospects/pipeline", array(
			"prospect_convit" => $prospect_convit,
			"prospect_show" => $prospect_show,
			"prospect_mananger" => $prospect_mananger,
			"prospect_close" => $prospect_close
		));
	}	

	public function trash(Request $request, $id)
	{
		
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->where('status', '1')->first();
		if(is_null($plansClient)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Plano em Status pendente, aguarde alteração de status do seu plano!"));
			die;
		}

		$plan = Plans::where('plan_id', $plansClient->plan_id)->first();

		if(!policiesAgent($this->module, $plan->modules)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
			die;
		}
		try {


			$prospect = Prospects::where('client_id', Auth::user()->client_id)->where('prospect_id', $id)->first();

			if(empty($prospect)) {
				abort(404);
			}

			$prospect->delete();
			return redirect(route('client-prospect'))->withErrors(array("type" => "success", "msg" => "Operação realizada com sucesso!"));

		} catch (Exception $e) {
			return redirect(route('client-prospect'))->withErrors(array("type" => "danger", "msg" => "Erro: ".$e->getMessage(). " // Contate o Suporte"));
		}       
	}

	public function ViewProspect(Request $request, $id)
	{
		
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->first();
		$plan = Plans::where('plan_id', $plansClient->plan_id)->first();

		if(!policiesAgent($this->module, $plan->modules)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
			die;
		}

		$prospect = Prospects::where('client_id', Auth::user()->client_id)->where('prospect_id', $id)->first();
		$apresentations = Apresentations::where('client_id', Auth::user()->client_id)->where('prospect_id', $id)->orderBy('created_at', 'DESC')->get();
		
		if(empty($prospect)) {
			abort(404);
		}
		return view("client/pages/prospects/show", array(
			"prospect" => $prospect,
			"apresentations" => $apresentations
		));
	}

	public function report()
	{
		
		
		$client = Clients::where('client_id', Auth::user()->client_id)->first();
		$plansClient = PlansClients::where('client_id', $client->client_id)->where('status', '1')->first();
		if(is_null($plansClient)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Plano em Status pendente, aguarde alteração de status do seu plano!"));
			die;
		}

		$plan = Plans::where('plan_id', $plansClient->plan_id)->first();

		if(!policiesAgent($this->reportProspect, $plan->modules)){
			return redirect(route('client-dashboard'))->withErrors(array("type" => "danger", "msg" => "Você não tem permissão!"));
			die;
		}
	}

}