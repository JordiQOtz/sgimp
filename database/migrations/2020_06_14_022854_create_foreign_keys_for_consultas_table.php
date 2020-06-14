<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultas', function (Blueprint $table) {
            $table->foreign('id_cita')->references('id_cita')->on('citas');
            $table->foreign('id_enfermedad')->references('id_enfermedad')->on('enfermedades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultas', function (Blueprint $table){
            $table->dropForeign('consultas_id_cita_foreign');
            $table->dropForeign('consultas_id_enfermedad_foreign');
        });
    }
}
