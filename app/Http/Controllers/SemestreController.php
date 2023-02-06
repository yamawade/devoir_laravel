<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function semestres(){
        $semestre = Semestre::all();
        return view('semestre',['semestre'=>$semestre]);
    }
}
