<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->date('fecha_cierre_apuesta');
            $table->date('fecha_cierre_evento');
            $table->float('pozo_inicial');
            $table->float('pozo_banca');

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
        Schema::dropIfExists('eventos');
    }
}
