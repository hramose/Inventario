<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revirtuals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eth');
            $table->string('vlan');
            $table->string('ip');
            $table->string('gateway');
            $table->integer('tred_id')->unsigned();
            $table->foreign('tred_id')->references('id')->on('treds')
                ->onDelete('cascade')
                ->onUpdete('cascade');
            $table->integer('evirtual_id')->unsigned();
            $table->foreign('evirtual_id')->references('id')->on('evirtuals')
                ->onDelete('cascade')
                ->onUpdete('cascade');
            $table->timestamps();
            $table -> softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('revirtuals');
    }
}
