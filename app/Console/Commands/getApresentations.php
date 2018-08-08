<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class getApresentations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ProspectsApresentations:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verificação de Apresentação de Prospecto';

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
        # Update de Apresentação
        $apresentations = DB::table('tb_apresentations')->where('date', '<', date('Y-m-d'))->update(['status' => 3]);

    }
}
