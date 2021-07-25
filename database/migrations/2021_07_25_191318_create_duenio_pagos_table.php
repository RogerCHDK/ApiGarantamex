<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuenioPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duenio_pagos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->tinyInteger('meses');
            $table->foreignId('catalogo_pago_id')->constrained();
            $table->foreignId('duenio_id')->constrained();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('duenio_pagos');
    }
}
