<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPlansClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_plans_clients', function(Blueprint $table)
		{
			$table->increments('plan_client_id');
			$table->integer('plan_id');
			$table->integer('client_id');
			$table->date('validate');
			$table->date('date_block')->nullable();
			$table->integer('date_recurrent');
			$table->integer('type_cicle')->nullable();
			$table->integer('status');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_plans_clients');
	}

}
