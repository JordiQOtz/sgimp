<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medico;

class PacientesController extends Controller
{
    public function horarios(){
        return "list";
        //return view::make('pacientes.verCitas')->with('citas','citas');
    }
}
