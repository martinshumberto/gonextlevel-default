<?php

use Illuminate\Database\Seeder;

class TbStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tb_states')->delete();
        
        \DB::table('tb_states')->insert(array (
            0 => 
            array (
                'states_id' => 1,
                'code' => 'AC',
                'name' => 'ACRE',
            ),
            1 => 
            array (
                'states_id' => 2,
                'code' => 'AL',
                'name' => 'ALAGOAS',
            ),
            2 => 
            array (
                'states_id' => 3,
                'code' => 'AP',
                'name' => 'AMAPÁ',
            ),
            3 => 
            array (
                'states_id' => 4,
                'code' => 'AM',
                'name' => 'AMAZONAS',
            ),
            4 => 
            array (
                'states_id' => 5,
                'code' => 'BA',
                'name' => 'BAHIA',
            ),
            5 => 
            array (
                'states_id' => 6,
                'code' => 'CE',
                'name' => 'CEARÁ',
            ),
            6 => 
            array (
                'states_id' => 7,
                'code' => 'DF',
                'name' => 'DISTRITO FEDERAL',
            ),
            7 => 
            array (
                'states_id' => 8,
                'code' => 'ES',
                'name' => 'ESPÍRITO SANTO',
            ),
            8 => 
            array (
                'states_id' => 9,
                'code' => 'RR',
                'name' => 'RORAIMA',
            ),
            9 => 
            array (
                'states_id' => 10,
                'code' => 'GO',
                'name' => 'GOIÁS',
            ),
            10 => 
            array (
                'states_id' => 11,
                'code' => 'MA',
                'name' => 'MARANHÃO',
            ),
            11 => 
            array (
                'states_id' => 12,
                'code' => 'MT',
                'name' => 'MATO GROSSO',
            ),
            12 => 
            array (
                'states_id' => 13,
                'code' => 'MS',
                'name' => 'MATO GROSSO DO SUL',
            ),
            13 => 
            array (
                'states_id' => 14,
                'code' => 'MG',
                'name' => 'MINAS GERAIS',
            ),
            14 => 
            array (
                'states_id' => 15,
                'code' => 'PA',
                'name' => 'PARÁ',
            ),
            15 => 
            array (
                'states_id' => 16,
                'code' => 'PB',
                'name' => 'PARAÍBA',
            ),
            16 => 
            array (
                'states_id' => 17,
                'code' => 'PR',
                'name' => 'PARANÁ',
            ),
            17 => 
            array (
                'states_id' => 18,
                'code' => 'PE',
                'name' => 'PERNAMBUCO',
            ),
            18 => 
            array (
                'states_id' => 19,
                'code' => 'PI',
                'name' => 'PIAUÍ',
            ),
            19 => 
            array (
                'states_id' => 20,
                'code' => 'RJ',
                'name' => 'RIO DE JANEIRO',
            ),
            20 => 
            array (
                'states_id' => 21,
                'code' => 'RN',
                'name' => 'RIO GRANDE DO NORTE',
            ),
            21 => 
            array (
                'states_id' => 22,
                'code' => 'RS',
                'name' => 'RIO GRANDE DO SUL',
            ),
            22 => 
            array (
                'states_id' => 23,
                'code' => 'RO',
                'name' => 'RONDÔNIA',
            ),
            23 => 
            array (
                'states_id' => 24,
                'code' => 'TO',
                'name' => 'TOCANTINS',
            ),
            24 => 
            array (
                'states_id' => 25,
                'code' => 'SC',
                'name' => 'SANTA CATARINA',
            ),
            25 => 
            array (
                'states_id' => 26,
                'code' => 'SP',
                'name' => 'SÃO PAULO',
            ),
            26 => 
            array (
                'states_id' => 27,
                'code' => 'SE',
                'name' => 'SERGIPE',
            ),
        ));
        
        
    }
}