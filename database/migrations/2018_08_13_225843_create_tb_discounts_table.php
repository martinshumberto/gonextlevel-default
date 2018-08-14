<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_discounts', function(Blueprint $table)
		{
			$table->integer('discount_id', true);
			$table->string('title');
			$table->integer('type');
			$table->string('value', 150)->nullable();
			$table->integer('amount')->nullable();
			$table->integer('amount_client')->nullable();
			$table->date('validate')->nullable();
			$table->string('discount_code');
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
		Schema::drop('tb_discounts');
	}

}
