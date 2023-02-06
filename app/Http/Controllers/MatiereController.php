<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function matieres(){
        $matiere = Matiere::all();
        return view('matiere',['matiere'=>$matiere]);
    }
}
