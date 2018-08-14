<?php

use Illuminate\Database\Seeder;

class TbPlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tb_plans')->delete();
        
        \DB::table('tb_plans')->insert(array (
            0 => 
            array (
                'plan_id' => 1,
                'title' => 'Plano Gratis',
                'title_small' => 'Plano Gratis',
                'featured' => 0,
                'text' => 'Teste nossa plataforma por 15 dias gratuitamente, assim, você pode usufruir de algumas de nossas funcionalidades de forma limitada para te ajudar a decidir em contratar um de nossos planos.',
                'modules' => 'a:b:c',
                'price' => '0.00',
                'validate' => 15,
                'status' => 1,
                'created_at' => '2018-08-14 00:00:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'plan_id' => 2,
                'title' => 'Plano Intermediário',
                'title_small' => 'Plano Intermediário',
                'featured' => 1,
                'text' => 'Com esse plano você tem acesso as principais funcionalidades de nossa plataforma, para gerenciar seus prospectos e acesso a nossa central de treinamentos e outros.',
                'modules' => 'a:b:c:d:e:f:g',
                'price' => '39.90',
                'validate' => 30,
                'status' => 1,
                'created_at' => '2018-08-14 00:00:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'plan_id' => 3,
                'title' => 'Plano Avançado',
                'title_small' => 'Plano Avançado',
                'featured' => 0,
                'text' => 'Indicamos esse plano para o consultor que deseja aumentar sua excelência nas ações de prospecção. Com funcionalidades extras como chat com sua equipe, personalização de e-mail, relatórios personalizados e outros.',
                'modules' => 'a:b:c:d:e:f:g:h:i:j:k',
                'price' => '52.90',
                'validate' => 30,
                'status' => 1,
                'created_at' => '2018-08-14 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}