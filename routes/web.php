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

Route::post('paciente/login',function(){
    return redirect()->route('paciente.solicitarCita'); //(probando vista) DEBE TENER VISTA: 'paciente.login'
})->name('paciente.login');

Route::post('medico/login',function(){
    return redirect()->route('medico.verCitas'); //(probando vista) DEBE TENER VISTA: 'medico.login'
})->name('medico.login');

Route::get('paciente/solicitarCita',function(){
    return view('paciente.solicitarCita');
})->name('paciente.solicitarCita');

Route::get('medico/verCitas',function(){
    return view('medico.verCitas');
})->name('medico.verCitas');

Route::get('/user', 'UserController@index');