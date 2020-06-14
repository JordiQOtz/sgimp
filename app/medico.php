<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    public function horarios(){
        return $this->hasMany('App\horario','id_medico','id_medico');
    }
}
