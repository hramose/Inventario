<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBefisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('befisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fec_backup');
            $table->string('mecanismo');
            $table->string('observacion');
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
        Schema::drop('befisicos');
    }
}
