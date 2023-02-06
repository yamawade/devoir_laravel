<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre;
use App\Models\Matiere;

class EtudiantContoller extends Controller
{
    
    public function index()
    {
        $etudiant = Etudiant::all();
        $matiere =  Matiere::all();
        $semestre = Semestre::all();
        return view('etudiant', ['etudiant'=>$etudiant ,'matiere'=>$matiere,'semestre'=>$semestre]);
        
    }

    
    public function create()
    {
        $matiere = Matiere::all();
        $semestre = Semestre::all();
        return view('etudiant/ajout');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Etudiant::create($input);
        $etudiant = Etudiant::find($id);
       
        return view('etudiant/create',['matiere'=>$matiere,'semestre'=>$semestre]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
