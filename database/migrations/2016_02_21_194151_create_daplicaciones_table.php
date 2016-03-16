<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaplicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daplicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('version');
            $table->string('lic_programas');
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
        Schema::drop('daplicaciones');
    }
}
