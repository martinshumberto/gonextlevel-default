<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;
use App\Model\Clients;
use App\Model\Plans;
use App\Model\PlansClients;

class PlansSchulled extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'plans:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Script para Planos e Clients';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $planClient = DB::table('tb_plans_clients')->where('status', '1')->orderBy("plan_client_id", "DESC")->get();        
        foreach ($planClient as $key => $value) {

            if ($value->validate <= date("Y-m-d")) {
                $block_date = date('Y-m-d', strtotime('+5 days'));
                DB::table('tb_plans_clients')
                ->where('plan_client_id',$value->plan_client_id)
                ->update(['status' => '3', 'date_block' => $block_date]);
            }

        }

        $planClient = DB::table('tb_plans_clients')->where('status', '3')->orderBy("plan_client_id", "DESC")->get();        
        foreach ($planClient as $key => $value) {

            if ($value->date_block <= date("Y-m-d")) {
                # Bloqueia Usuário
                DB::table('tb_clients')
                ->where('client_id',$value->client_id)
                ->update(['status' => '3']);

                # Altera Plano do Cliente
                DB::table('tb_plans_clients')
                ->where('plan_client_id',$value->plan_client_id)
                ->update(['status' => '5']);
            }

        }

        $this->info('Comando rodando com êxito');

    }
}
