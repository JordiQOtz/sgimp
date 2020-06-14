<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->foreign('id_horario')->references('id_horario')->on('horarios');
            $table->foreign('id_paciente')->references('nss')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citas',function(Blueprint $table){
            $table->dropForeign('citas_id_horario_foreign');
            $table->dropForeign('citas_id_paciente_foreign');
        });
    }
}
