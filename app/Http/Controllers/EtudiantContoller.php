<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre;
use App\Models\Matiere;
use App\Models\Etudiant;

class EtudiantContoller extends Controller
{
    
    public function index()
    {
        //
    }


    public function create()
    {
        
        $etudiant = Etudiant::all();
        $matiere =  Matiere::all();
        $semestre = Semestre::all();
        return view('etudiant/ajout', ['etudiant'=>$etudiant ,'matiere'=>$matiere,'semestre'=>$semestre]);

    }

    public function store(Request $request)
    {
        $input = $request->all();
        Etudiant::create($input);
        
        
        return redirect('etudiant/create')->with('flash_message','etudiant créé');
        // $input = $request->all();
        // Etudiant::create($input);
        // $etudiant = Etudiant::find($id);
       
        // return view('etudiant/create',['matiere'=>$matiere,'semestre'=>$semestre]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
