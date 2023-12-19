<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Matiere;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    //AFFICHAGE DE LA LISTE DES ETUDIANTS
    public function index()
    {
        $listeApprenant  = Apprenant::all();
        return view('apprenants/liste ', ['app' => $listeApprenant]);
        // return view('apprenants/liste ', compact("$listeApprenants "));
    }


    //AFFICHAGE DU FORMULAIRE D'AJOUT 
    public function create()
    {

        return view('apprenants.create ');
        // return view('apprenants/liste ', compact("$listeApprenants "));
    }

    //FONCTION D'AJOUT
    public function store(Request $request)
    {
        //dd die and dump  
        // dd($request->input('nom'));
        // Apprenant::create([
        //     "nom" => $request->input('nom'),
        //     "prenom" => $request->input('prenom'),
        //     "matricule" => $request->input('matricule'),
        //     "telephone" => $request->input('telephone')
        // ]);
        $request->validate(
            [
                "nom" => "required",
                "prenom" => "required",
                "matricule" => "required",
                "telephone" => "required",
            ]
        );
        Apprenant::create($request->all());
        // return redirect()->route('students.index')->with('success', 'L\'apprenant a été ajouté avec succès.');

        // $app = new Apprenant();
        // $app->nom = request()->nom;
        // $app->prenom = request()->prenom;
        // $app->matricule = request()->matricule;
        // $app->telephone = request()->telephone;
        // $app->save();
        /* $app = new Apprenant();
        $app->nom =  $request->input('nom');
        $app->prenom = $request->input('prenom');
        $app->matricule = $request->input('matricule');
        $app->telephone = $request->input('telephone');*/
    }


    //AFFICHAGE DU FORMULAIRE DE MODIFICATION
    public function modifier($id)
    {
        $students = Apprenant::findOrFail($id);
        return view('apprenants.modifier', ['student' => $students]);
    }
    //FONCTION DE MODIFICATION
    public function update(Request $request, $id)
    {
        // Récupération de l'élément à modifier depuis le modèle
        $app = Apprenant::findOrFail($id);

        // Mettre à jour les données avec celles du formulaire

        $app->nom = $request->input('nom');
        $app->prenom = $request->input('prenom');
        $app->matricule = $request->input('matricule');
        $app->telephone = $request->input('telephone');

        // Sauvegarde des modifications
        $app->save();
        return redirect()->route('students.index')->with('success', 'Les données ont été modifiées avec succès.');
    }


    public function delete($id)
    {
        $app = Apprenant::findOrFail($id);
        $app->delete();
        return redirect()->back()->with('success', 'L\'apprenant a été supprimé avec succès');
        // return ('L\'apprenant a ete supprime');
    }



    // public function show($id)
    // {
    //     // Récupérer l'étudiant avec l'identifiant spécifié depuis la base de données
    //     $student = Apprenant::find($id);
    //     $listeNotes = Note::all();
    //     $listeMatieres = Matiere::all();
    //     // Passer les données de l'étudiant à la vue
    //     return view('apprenants.show', [
    //         'student' => $student,
    //         'notes' =>  $listeNotes,
    //         'mat' => $listeMatieres
    //     ]);
    // }
}