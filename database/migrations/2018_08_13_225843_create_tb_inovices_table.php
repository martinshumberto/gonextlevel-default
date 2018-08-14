<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbInovicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_inovices', function(Blueprint $table)
		{
			$table->increments('inovice_id');
			$table->integer('plan_id');
			$table->integer('client_id');
			$table->integer('type');
			$table->integer('gateway');
			$table->string('gateway_key');
			$table->string('gateway_response');
			$table->string('discount_code')->nullable();
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
		Schema::drop('tb_inovices');
	}

}
