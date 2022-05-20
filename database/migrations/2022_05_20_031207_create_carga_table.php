<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga', function (Blueprint $table) {
            $table->increments('id_codigo');
            $table->string('descripcion');
            $table->integer('codigo_entrada')->unsigned();
            $table->foreign('codigo_entrada','fk_entrada_salida')->references('codigo_entrada')->on('entrada_salida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carga');
    }
}
