<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id_pago');
            $table->tinyInteger('jugador_id');
            $table->tinyInteger('nro_recibo');
            $table->date('fecha_pago');
            $table->decimal('importe',8,2);
            $table->tinyInteger('cobrador_id');
            $table->tinyInteger('usuario_id');
            $table->tinyInteger('concepto_id');
            $table->tinyInteger('mes_id');
            $table->tinyInteger('estado');
            $table->string('obser',150);
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
        //
    }
}
