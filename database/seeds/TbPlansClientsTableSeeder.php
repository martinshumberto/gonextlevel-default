<?php

use Illuminate\Database\Seeder;

class TbPlansClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tb_plans_clients')->delete();
        
        \DB::table('tb_plans_clients')->insert(array (
            0 => 
            array (
                'plan_client_id' => 1,
                'plan_id' => 3,
                'client_id' => 1,
                'validate' => '2018-09-13',
                'date_recurrent' => 14,
                'status' => 2,
                'created_at' => '2018-08-14 20:44:35',
                'updated_at' => '2018-08-14 23:25:26',
            ),
            1 => 
            array (
                'plan_client_id' => 2,
                'plan_id' => 1,
                'client_id' => 1,
                'validate' => '2018-08-31',
                'date_recurrent' => 16,
                'status' => 1,
                'created_at' => '2018-08-16 20:47:49',
                'updated_at' => '2018-08-16 20:47:49',
            ),
        ));
        
        
    }
}