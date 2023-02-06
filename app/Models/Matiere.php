<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class Matiere extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "nom_matiere"
        
    ];
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class);
    }
}
