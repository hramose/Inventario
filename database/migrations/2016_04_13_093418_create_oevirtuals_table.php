<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOevirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oevirtuals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observaciones');
            $table->string('reali_por');
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
        Schema::drop('oevirtuals');
    }
}
