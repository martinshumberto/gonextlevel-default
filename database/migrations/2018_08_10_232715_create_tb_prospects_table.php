<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbProspectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_prospects', function(Blueprint $table)
		{
			$table->integer('prospect_id', true);
			$table->integer('client_id');
			$table->string('name', 150);
			$table->string('phone', 60);
			$table->string('email', 200);
			$table->integer('network')->nullable();
			$table->integer('credibility')->nullable();
			$table->integer('entrepreneur')->nullable();
			$table->integer('energy')->nullable();
			$table->integer('dreamer')->nullable();
			$table->integer('resource')->nullable();
			$table->integer('contact')->nullable();
			$table->integer('status');
			$table->integer('stage');
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
		Schema::drop('tb_prospects');
	}

}
