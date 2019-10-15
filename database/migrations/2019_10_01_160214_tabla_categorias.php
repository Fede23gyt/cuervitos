<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id_categoria');
            $table->string('ano_categoria',10);
            $table->string('abrev_catego',30);
            $table->string('nombre_equipo',100);
            $table->tinyInteger('sede_id');
            $table->tinyInteger('profe1_id');
            $table->tinyInteger('profe2_id');
            $table->tinyInteger('estado');
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
