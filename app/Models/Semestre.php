<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class Semestre extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "nom_semestre"   
    ];
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class);
    }
}
