<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_plans', function(Blueprint $table)
		{
			$table->increments('plan_id');
			$table->string('title');
			$table->string('title_small');
			$table->integer('featured')->default(0);
			$table->text('text', 65535);
			$table->text('modules', 65535);
			$table->decimal('price', 10);
			$table->integer('validate')->nullable()->default(30);
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
		Schema::drop('tb_plans');
	}

}
