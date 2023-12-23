<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $table = ' apprenant';
    //pour les champs possibles
    protected $fillable = ["nom", "prenom", "matricule", "telephone"];
}
