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
			$table->integer('price');
			$table->integer('type');
			$table->string('gateway', 100);
			$table->string('gateway_key')->nullable();
			$table->text('gateway_response', 65535)->nullable();
			$table->string('discount_code')->nullable();
			$table->integer('_cardNumber')->nullable();
			$table->string('_fullName')->nullable();
			$table->string('_brand')->nullable();
			$table->integer('status');
			$table->dateTime('update')->nullable();
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
