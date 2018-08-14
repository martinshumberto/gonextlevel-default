<?php

use Illuminate\Database\Seeder;

class TbDiscountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tb_discounts')->delete();
        
        \DB::table('tb_discounts')->insert(array (
            0 => 
            array (
                'discount_id' => 1,
                'title' => '50% de Desconto',
                'type' => 1,
                'value' => '50',
                'amount' => NULL,
                'amount_client' => NULL,
                'validate' => NULL,
                'discount_code' => 'GO012MT',
                'status' => 1,
                'created_at' => '2018-08-14 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}