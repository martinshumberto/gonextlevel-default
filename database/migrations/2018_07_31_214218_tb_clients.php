<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_clients', function (Blueprint $table) {
            $table->increments('client_id');
            $table->string('name');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('login');
            $table->string('password');
            $table->string('phone');
            $table->string('birthdate');
            $table->string('hinode_id');
            $table->string('image');
            $table->integer('states_id');
            $table->integer('cities_id');
            $table->integer('status');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_clients');
    }
}
