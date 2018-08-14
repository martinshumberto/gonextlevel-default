<?php

use Illuminate\Database\Seeder;

class TbClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tb_clients')->delete();
        
        \DB::table('tb_clients')->insert(array (
            0 => 
            array (
                'client_id' => 1,
                'name' => 'Wallace Correa Fontes',
                'cpf' => NULL,
                'email' => 'ideiacompany@gmail.com',
                'login' => NULL,
                'password' => '$2y$10$7a8xCbKlHuOp.2KJuWuWh./rnrCBUe6NbVnArP2NodKLiMf9IF6/O',
            'phone' => '(65) 9925-6442',
                'birthdate' => NULL,
                'hinode_id' => '123',
                'image' => 'default_user.png',
                'states_id' => NULL,
                'cities_id' => NULL,
                'status' => 0,
                'stage' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-08-14 17:03:54',
                'updated_at' => '2018-08-14 17:03:54',
            ),
        ));
        
        
    }
}