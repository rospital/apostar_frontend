<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
      S: Sorteo
      C: Cerrado
      R: Con resultado
      A: Anulado
    */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('es_ganador');
            $table->date('fecha_pago');
            $table->enum('estado', ['S', 'C', 'R', 'A']);
            $table->float('valor');

            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id')
              ->references('id')
              ->on('eventos')
              ->onDelete('cascade');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
              ->references('id')
              ->on('usuarios')
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
        Schema::dropIfExists('tickets');
    }
}
