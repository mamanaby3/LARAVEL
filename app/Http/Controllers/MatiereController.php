<?php

namespace App\Http\Controllers;

use App\Models\Matiere;

use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function index()
    {
        $listeMatieres = Matiere::all();
        return view('matieres/liste ', ['mat' =>  $listeMatieres]);
    }
}
