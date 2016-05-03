<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEfisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->enum('estado', ['operativo', 'apagado']);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdete('cascade');
            $table->integer('tefisico_id')->unsigned();
            $table->foreign('tefisico_id')->references('id')->on('tefisicos')
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
        Schema::drop('efisicos');
    }
}
