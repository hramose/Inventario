<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ubicacion');
            $table->string('h_status');
            $table->string('so');
            $table->string('cpu');
            $table->string('hd');
            $table->string('men');
            $table->string('act_pwd_201310');
            $table->string('gestion');
            $table->string('por_comprar');
            $table->string('serial');
            $table->date('fecha_instalacion');
            $table->string('toperacion');
            $table->enum('soporte', ['na', 'si','no']);
            $table->date('ini_soporte');
            $table->date('fin_soporte');
            $table->string('lic_so');
            $table->string('lic_programas');
            $table->string('producto');
            $table->string('contrato');
            $table->integer('efisico_id')->unsigned();
            $table->foreign('efisico_id')->references('id')->on('efisicos')
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
        Schema::drop('defisicos');
    }
}
