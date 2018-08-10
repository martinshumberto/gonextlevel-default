<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbApresentationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_apresentations', function(Blueprint $table)
		{
			$table->integer('apresentation_id', true);
			$table->integer('prospect_id');
			$table->integer('client_id');
			$table->text('locate', 65535);
			$table->date('date');
			$table->time('hour');
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
		Schema::drop('tb_apresentations');
	}

}
