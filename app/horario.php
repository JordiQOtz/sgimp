<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    public function medico(){
        return $this->belongsTo('App\medico','id_medico','id_medico');
    }
    public function horario(){
        return $this->belongsTo('App\cita','id_horario','id_horario');
    }
}
