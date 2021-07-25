<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido_paterno',50);
            $table->string('apellido_materno',50);
            $table->string('email',100)->unique(); 
            $table->string('telefono',11);
            $table->string('password');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('calle')->nullable();
            $table->integer('codigo_postal')->nullable();
            $table->tinyInteger('numero_interior')->nullable();
            $table->tinyInteger('numero_exterior')->nullable();
            $table->foreignId('tipo_usuario_id')->constrained();
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
        Schema::dropIfExists('usuarios');
    }
}
