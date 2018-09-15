<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_messages', function(Blueprint $table)
		{
			$table->increments('message_id');
			$table->integer('from_id');
			$table->integer('to_id');
			$table->text('message', 65535);
			$table->integer('status')->nullable();
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
		Schema::drop('tb_messages');
	}

}
