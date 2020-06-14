<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    public function paciente(){
        return $this->belongsTo('App\paciente','id_paciente','nss');
    }
    public function horario(){
        return $this->hasOne('App\horario','id_horario','id_horario');
    }
    public function consulta(){
        return $this->hasOne('App\consulta','id_cita','id_cita');
    }
}
