<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    public function citas(){
        return $this->hasMany('App\cita','id_paciente','nss');
    }
}
