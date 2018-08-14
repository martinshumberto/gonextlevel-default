<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbDiscountsClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_discounts_clients', function(Blueprint $table)
		{
			$table->integer('discount_client_id', true);
			$table->integer('discount_id');
			$table->integer('client_id');
			$table->integer('plan_id');
			$table->string('discount_code')->nullable();
			$table->decimal('discount_price', 10)->nullable();
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
		Schema::drop('tb_discounts_clients');
	}

}
