<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\horario;

class SesionPacienteController extends Controller
{
    public function login(Request $request){
        $nss_user = $request -> input('nss_paciente');
        $pass_user = $request -> input('pass_paciente');
        $paciente = DB::table('pacientes')->where('nss',$nss_user);

        if( $paciente->value('password') == $pass_user ){
            $request->session()->put('userType','paciente');
            $request->session()->put('name',$paciente->value('nombre'));

            $horarios = horario::where('disponibilidad',1)->get()->sortBy('hora')->sortBy('dia');
            $fechas = $horarios->unique('dia');
            return view::make('paciente.solicitarCita')
                                ->with('horarios',$horarios)
                                ->with('fechas',$fechas)
                                ->with('nss',$request->nss_paciente)
                                ->with('nombre',$paciente->value('nombre'));
        }
        else{
            return view::make('paciente.login')->with('message','Ingresa correctamente tu NSS y/o contraseña.');
        }
    }
}