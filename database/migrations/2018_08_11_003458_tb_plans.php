<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPlans extends Migration
{
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
            $table->text('text');
            $table->text('modules');
            $table->decimal('price', 10, 2);
            $table->date('validate')->nullable();
            $table->integer('status');
            $table->timestamps();
            $table->unique(['plan_id'], 'UP_Plans');
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
