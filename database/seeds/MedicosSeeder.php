<?php

use Illuminate\Database\Seeder;

class MedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
            [
                'id_medico' =>      '10001',
                'nombre'    =>      'Mario',
                'aPaterno'  =>      'Rubio',
                'aMaterno'  =>      'Romero',
                'edad'      =>      44,
                'email'     =>      'mrr@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'm',
                'telefono'  =>      '81818374',
                'consultorio' =>    '9184',
                'turno'     =>      'v'
            ],[
                'id_medico' =>      '20005',
                'nombre'    =>      'Lourdes',
                'aPaterno'  =>      'Peñasco',
                'aMaterno'  =>      'Ortiz',
                'edad'      =>      24,
                'email'     =>      'lpo@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'f',
                'telefono'  =>      '75839209',
                'consultorio' =>    '9123',
                'turno'     =>      'v'
            ],[
                'id_medico' =>      '98765',
                'nombre'    =>      'Rodrigo',
                'aPaterno'  =>      'Murua',
                'aMaterno'  =>      'Peredo',
                'edad'      =>      39,
                'email'     =>      'rmp@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'm',
                'telefono'  =>      '94397744',
                'consultorio' =>    '9125',
                'turno'     =>      'v'
            ],
            [
                'id_medico' =>      '109283',
                'nombre'    =>      'Andrea',
                'aPaterno'  =>      'Carrillo',
                'aMaterno'  =>      'Carrera',
                'edad'      =>      66,
                'email'     =>      'acc@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'f',
                'telefono'  =>      '92834939',
                'consultorio' =>    '1092',
                'turno'     =>      'm'
            ],
            [
                'id_medico' =>      '212243',
                'nombre'    =>      'Fernanda',
                'aPaterno'  =>      'Morales',
                'aMaterno'  =>      'Torres',
                'edad'      =>      96,
                'email'     =>      'fmt@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'f',
                'telefono'  =>      '75912379',
                'consultorio' =>    '1109',
                'turno'     =>      'm'
            ]
        ]);
    }
}
