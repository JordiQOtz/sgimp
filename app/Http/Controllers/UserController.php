<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // DB::insert('insert into paciente (nss,nombre,email,password) 
        // values (?,?,?,?)',[
        //     2016630313,'jordi','jordi@sgimp.com','password',
        // ]);

        return view('home');
    }
}
