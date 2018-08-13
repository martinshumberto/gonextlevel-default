<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPlansClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_plans_clients', function(Blueprint $table)
        {
            $table->increments('plan_client_id');
            $table->integer('plan_id');
            $table->integer('client_id');
            $table->date('validate');
            $table->date('date_recurrent');
            $table->integer('status');
            $table->timestamps();
            $table->unique(['plan_client_id'], 'UP_Plans_Clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_plans_clients');
    }
}
