<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cita;
use App\horario;
use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{
    public function delete($id_cita){
        
        $id_horario = cita::where('id_cita',$id_cita)->value('id_horario');

            //Disponibilidad en horario = 1
        $affected = DB::table('horarios')
            ->where('id_horario',$id_horario)
            ->update(['disponibilidad'=>1]);

            //Borrando cita
        $affected = DB::table('citas')
            ->where('id_cita',$id_cita)
            ->delete();
        
        return view('medico.verCitas');
    }
    public function create($id_horario,$nss){
        $cita = new cita;
        $cita->id_horario = $id_horario;
        DB::table('horarios')
            ->where('id_horario',$id_horario)
            ->update(['disponibilidad'=>0]);
        $cita->id_paciente = $nss;
        $cita->save();
        $paciente = DB::table('pacientes')
            ->where('nss',$nss)->get();
        return view('paciente.solicitarCita')
            ->with('nss',$nss);
    }
}
