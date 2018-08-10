<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_cities', function(Blueprint $table)
		{
			$table->integer('cities_id')->nullable();
			$table->integer('states_id')->nullable();
			$table->string('name', 72)->nullable();
			$table->string('cep', 8)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_cities');
	}

}
