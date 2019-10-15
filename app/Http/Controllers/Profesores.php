<?php

namespace App\Http\Controllers;

use App\Profesores;


class Profesores extends Controller
{
    //
    public function index()
    {
        //
        $profes=Profesores::orderBy('id_profe','ASC');
        
        return view('profesores/index',compact('profesores'));
    }

}
