<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->bigInteger('nss');
            $table->String('nombre');
            $table->String('aPaterno');
            $table->String('aMaterno');
            $table->int('edad');
            $table->String('email');
            $table->String('password');
            $table->String('genero',1);
            $table->bigInteger('telefono');
            $table->bigInteger('consultorio');
            $table->String('turno',1);
            $table->bigInteger('horario')->unsigned();
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
        Schema::dropIfExists('medicos');
    }
}
