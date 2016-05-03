<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devirtuals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ubicacion');
            $table->string('h_status');
            $table->string('so');
            $table->string('cpu');
            $table->string('hd');
            $table->string('men');
            $table->string('act_pwd_201310');
            $table->string('gestion');
            $table->string('lic_so');
            $table->string('lic_programas');
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
        Schema::drop('devirtuals');
    }
}
