<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    public function cita(){
        return $this->belongsTo('App\cita','id_cita','id_cita');
    }
    public function enfermedades(){
        return $this->hasMany('App\enfermedad','id_enfermedad','id_enfermedad');
    }
}
