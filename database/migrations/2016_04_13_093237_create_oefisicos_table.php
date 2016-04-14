<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOefisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oefisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observaciones');
            $table->string('reali_por');
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
        Schema::drop('oefisicos');
    }
}
