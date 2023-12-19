<?php

namespace App\Http\Controllers;

use App\Models\UniteEnseignements;
use App\Models\Matiere;
use Illuminate\Http\Request;

class UniteEController extends Controller
{
    public function index()
    {
        $listeUE = UniteEnseignements::all();
        $listeMatieres = Matiere::all();

        return view('uniteenseignement/liste', [
            'ue' => $listeUE,
            'mat' => $listeMatieres
        ]);
    }
}
