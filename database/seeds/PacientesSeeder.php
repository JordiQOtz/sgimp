<?php

use Illuminate\Database\Seeder;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nss'       =>      '112233',
                'nombre'    =>      'Juan',
                'aPaterno'  =>      'Pérez',
                'aMaterno'  =>      'Hernández',
                'edad'      =>      44,
                'email'     =>      'notemail@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'm',
                'telefono'  =>      '11992834'
            ],[
                'nss'       =>      '112234',
                'nombre'    =>      'Georgina',
                'aPaterno'  =>      'Hidalgo',
                'aMaterno'  =>      'López',
                'edad'      =>      19,
                'email'     =>      'geo@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'f',
                'telefono'  =>      '11992834'
            ],[
                'nss'       =>      '112235',
                'nombre'    =>      'Jorge',
                'aPaterno'  =>      'Nava',
                'aMaterno'  =>      'Herrera',
                'edad'      =>      39,
                'email'     =>      'jnh@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'm',
                'telefono'  =>      '11992834'
            ],
            [
                'nss'       =>      '212235',
                'nombre'    =>      'Jorge',
                'aPaterno'  =>      'Nava',
                'aMaterno'  =>      'Herrera',
                'edad'      =>      39,
                'email'     =>      'jnh@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'm',
                'telefono'  =>      '11992834'
            ],
            [
                'nss'       =>      '212235',
                'nombre'    =>      'Jorge',
                'aPaterno'  =>      'Nava',
                'aMaterno'  =>      'Herrera',
                'edad'      =>      39,
                'email'     =>      'jnh@jack.com',
                'password'  =>      '1234',
                'genero'    =>      'm',
                'telefono'  =>      '11992834'
            ]
        ]);
    }
}
