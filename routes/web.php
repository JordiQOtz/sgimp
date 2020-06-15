<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('paciente/login',function(){
    return view('paciente.login');
})->name('paciente.login');

Route::get('medico/login',function(){
    return view('medico.login');
})->name('medico.login');

Route::post('paciente/login','SesionPacienteController@login')->name('paciente.login');

Route::post('medico/login','SesionMedicoController@login')->name('medico.login');

Route::get('paciente/solicitarCita',function(){
    return view('paciente.solicitarCita');
})->name('paciente.solicitarCita');

Route::get('medico/verCitas',function(){
    return view('medico.verCitas');
})->name('medico.verCitas');

Route::get('cita/delete/{id}','CitasController@delete');

Route::get('cita/create/{id}/{nss}','CitasController@create');

Route::get('/user', 'UserController@index');

Route::get('/sessions',function(){
    return $request->session()->all();
});