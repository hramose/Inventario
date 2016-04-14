<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignarefs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('efisico_id')->unsigned();
            $table->foreign('efisico_id')->references('id')->on('efisicos')
                ->onDelete('cascade')
                ->onUpdete('cascade');
            $table->integer('aplicacion_id')->unsigned();
            $table->foreign('aplicacion_id')->references('id')->on('aplicacions')
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
        Schema::drop('asignarefs');
    }
}
