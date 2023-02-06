<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;
use App\Models\Semestre;

class Etudiant extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "nom",
        "prenom"
    ];
    public function matieres()
    {
        return $this->belongsToMany(Matiere::class);
    }
    public function semestres()
    {
        return $this->belongsToMany(semestre::class);
    }
}
