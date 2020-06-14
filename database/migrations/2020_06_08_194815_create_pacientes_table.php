<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigInteger('nss')->unsigned();
            $table->String('nombre');
            $table->String('aPaterno');
            $table->String('aMaterno');
            $table->integer('edad')->unsigned();
            $table->String('email');
            $table->String('password');
            $table->String('genero',1);
            $table->bigInteger('telefono');
            $table->timestamps();

            $table->primary('nss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
