<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\cita;

class SesionMedicoController extends Controller
{
    public function login(Request $request){
        $id_user = $request -> input('usr_med');
        $pass_user = $request -> input('pass_med');
        $medico = DB::table('medicos')->where('id_medico',$id_user);
        if( $medico->value('password') == $pass_user ){
            $request->session()->put('userType','medico');
            $request->session()->put('name',$medico->value('nombre'));

            $citas = DB::table('citas')
                ->join('horarios','citas.id_horario','=','horarios.id_horario')
                ->join('medicos','horarios.id_medico','=','medicos.id_medico')
                ->join('pacientes','citas.id_paciente','=','pacientes.nss')
                ->select('citas.*','horarios.*','pacientes.nombre','pacientes.aPaterno','pacientes.aMaterno')
                ->where('medicos.id_medico',$id_user)
                ->orderBy('horarios.hora','asc')
                ->orderBy('horarios.dia','asc')
                ->get();

            return view::make('medico.verCitas')->with('citas',$citas)->with('nombre',$medico->value('nombre'));
        }
        else{
            return view::make('medico.login')->with('message','Ingresa correctamente tu usuario y/o contraseña.');
        }
    }
}