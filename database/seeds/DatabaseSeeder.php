<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TbPlansTableSeeder::class);
        $this->call(TbDiscountsTableSeeder::class);
        $this->call(TbStatesTableSeeder::class);
        $this->call(TbCitiesTableSeeder::class);
    }
}
