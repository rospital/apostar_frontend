<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApuestasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apuestas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('local_resultado');
            $table->integer('visitante_resultado');

            $table->integer('partido_id')->unsigned();
            $table->foreign('partido_id')
              ->references('id')
              ->on('partidos')
              ->onDelete('cascade');

            $table->integer('ticket_id')->unsigned();
            $table->foreign('ticket_id')
              ->references('id')
              ->on('tickets')
              ->onDelete('cascade');

            $table->integer('vendedor_id')->unsigned();
            $table->foreign('vendedor_id')
              ->references('id')
              ->on('vendedores')
              ->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apuestas');
    }
}
