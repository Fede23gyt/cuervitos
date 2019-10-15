<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaJugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('nro_ficha');
            $table->string('apellido',60);
            $table->string('nombres',60);
            $table->tinyInteger('dni');
            $table->date('fecnac');
            $table->tinyInteger('edad');
            $table->string('lugar_nac',60);
            $table->string('calle',60);
            $table->string('barrio',60);
            $table->string('tel_casa',20);
            $table->string('tel_cel',20);
            $table->string('mail',40);
            $table->string('facebook',50);
            $table->boolean('socio');
            $table->tinyInteger('nro_socio');
            $table->string('escuela',60);
            $table->string('domi_esc',60);
            $table->string('ano_esc',15);
            $table->string('horarios',50);
            $table->boolean('esc_nombre');
            $table->string('pa_apell',60);
            $table->string('pa_nombres',60);
            $table->tinyInteger('pa_dni');
            $table->boolean('pa_socio');
            $table->date('pa_fecnac');
            $table->string('pa_domic',60);
            $table->string('pa_lugarnac',60);
            $table->tinyInteger('pa_telfijo');
            $table->tinyInteger('pa_celu');
            $table->tinyInteger('pa_mail');
            $table->string('pa_trabajo',80);
            $table->string('ma_apell',60);
            $table->string('ma_nombres',60);
            $table->tinyInteger('ma_dni');
            $table->boolean('ma_socio');
            $table->date('ma_fecnac');
            $table->string('ma_domic',60);
            $table->string('ma_lugarnac',60);
            $table->tinyInteger('ma_telfijo');
            $table->tinyInteger('ma_celu');
            $table->tinyInteger('ma_mail');
            $table->string('ma_trabajo',80);
            $table->string('aut1_nombre',60);
            $table->string('aut1_ayno',80);
            $table->tinyInteger('aut1_dni');
            $table->string('aut1_relacion',80);
            $table->string('aut1_tel',80);
            $table->string('aut2_ayno',80);
            $table->tinyInteger('aut2_dni');
            $table->string('aut2_relacion',80);
            $table->string('aut2_tel',80);
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
