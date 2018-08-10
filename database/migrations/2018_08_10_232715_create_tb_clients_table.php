<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_clients', function(Blueprint $table)
		{
			$table->increments('client_id');
			$table->string('name');
			$table->integer('cpf')->nullable();
			$table->string('email', 100);
			$table->string('login', 100)->nullable();
			$table->text('password', 65535);
			$table->string('phone', 25)->nullable();
			$table->date('birthdate')->nullable();
			$table->string('hinode_id', 50)->nullable();
			$table->string('image')->nullable()->default('default_user.png');
			$table->integer('states_id')->nullable();
			$table->integer('cities_id')->nullable();
			$table->integer('status')->nullable();
			$table->integer('stage')->nullable()->default(0);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->unique(['client_id','cpf','email'], 'UC_Clients');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_clients');
	}

}
