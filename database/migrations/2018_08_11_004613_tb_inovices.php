<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbInovices extends Migration
{
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
            $table->integer('type');
            $table->integer('gateway');
            $table->string('gateway_key');
            $table->string('gateway_response');
            $table->integer('status');
            $table->timestamps();
            $table->unique(['inovice_id'], 'UI_Inovices');
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
