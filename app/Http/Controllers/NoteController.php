<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Matiere;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $listeNotes = Note::all();
        $listeMatieres = Matiere::all();
        $listeApprenant  = Apprenant::all();
        return view('notes/liste ', [
            'notes' =>  $listeNotes,
            'mat' => $listeMatieres,
            'app' => $listeApprenant
        ]);
    }
}
