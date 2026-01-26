<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Archive;

class ArchiveController extends Controller
{
    public function store(Request $request)
    {
        // Sécurité : seulement Admin
        if (Auth::user()->role !== 'Admin') {
            abort(403);
        }

        // Validation
        $request->validate([
            'annee' => 'required|string'
        ]);

    //  INSERTION EN BDD
    Archive::create([
        'annee' => $request->annee
    ]);

        return redirect()->back()->with('success', 'Année ajoutée avec succès');
    }
    
    public function index()
    {
         // Récupère toutes les années d'archive
        $archives = Archive::orderBy('annee')->get();
        // Transmet la variable $archives à la vue
        return view('pages.accueil', compact('archives'));
        }

    public function destroy($id)
    {
    // Vérification Admin
    if (Auth::user()->role !== 'Admin') {
        abort(403);
    }

    $archive = Archive::findOrFail($id);
    
    // Optionnel : supprimer les actualités liées
    // $archive->actualites()->delete();

    $archive->delete();

    return redirect()->back()->with('success', "Année supprimée avec succès.");
    }

}
