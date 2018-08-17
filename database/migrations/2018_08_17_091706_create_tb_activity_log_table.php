<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbActivityLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_activity_log', function(Blueprint $table)
		{
			$table->integer('activity_id', true);
			$table->integer('client_id');
			$table->text('text', 65535);
			$table->string('ip', 50);
			$table->string('action', 100);
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
		Schema::drop('tb_activity_log');
	}

}
