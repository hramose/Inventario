<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarEFsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_e_fs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('efisico_id')->unsigned();
            $table->foreign('efisico_id')->references('id')->on('efisicos')
                ->onDelete('cascade')
                ->onUpdete('cascade');
            $table->integer('aplicaciones_id')->unsigned();
            $table->foreign('aplicaciones_id')->references('id')->on('aplicaciones')
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
        Schema::drop('asignar_e_fs');
    }
}
