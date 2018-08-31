<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;
use App\Model\Inovices;

#MOIP REQUIRE
use Moip\Moip;
use Moip\Auth\BasicAuth;

class InoviceSchulled extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inovice:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scripts para Faturas';

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
        $moip = new Moip(new BasicAuth('QRCHHIZYDFJPASWASI1DUC7FZ0UGH3ZO', 'AM7AS2B66JSB882MNCDPA9TQUDCY128ADKSQAQ2M'), Moip::ENDPOINT_SANDBOX);
        $inovices = DB::table('tb_inovices')->where('status', '1')->orderBy("inovice_id", "DESC")->get();

        foreach ($inovices as $value) {


            $payment = $moip->payments()->get($value->gateway_key);
            $response = json_encode($payment);
            $response = json_decode($response);

            if($response->status == "IN_ANALYSIS"){
                $inovice = DB::table('tb_inovices')->where('inovice_id', $value->inovice_id)->update(['status' => 1]);
            }   

            if($response->status == "AUTHORIZED"){
                $inovice = DB::table('tb_inovices')->where('inovice_id', $value->inovice_id)->update(['status' => 2]);
            }

            if($response->status == "CANCELLED"){
                $inovice = DB::table('tb_inovices')->where('inovice_id', $value->inovice_id)->update(['status' => 4]);
            }

            if($response->status == "REFUNDED"){
                $inovice = DB::table('tb_inovices')->where('inovice_id', $value->inovice_id)->update(['status' => 5]);
            }

            if($response->status == "REVERSED"){
                $inovice = DB::table('tb_inovices')->where('inovice_id', $value->inovice_id)->update(['status' => 6]);
            }

        }
        $this->info('Comando rodando com êxito');
    }
}
