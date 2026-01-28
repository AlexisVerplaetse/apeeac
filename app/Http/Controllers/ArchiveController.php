<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archive;
use App\Models\Actualite;
use Illuminate\Support\Facades\Auth;

class ArchiveController extends Controller
{
    /**
     * Afficher la page d'accueil avec les actualités
     */
    public function index()
    {
        $archives = Archive::orderBy('annee', 'desc')->get();
        $actualites = Actualite::with('archive')
            ->orderBy('date_publication', 'desc')
            ->get();
        
        return view('pages.accueil', compact('archives', 'actualites'));
    }

    /**
     * Créer une nouvelle archive (année)
     */
    public function store(Request $request)
    {
        // ✅ SÉCURITÉ : Vérifier que l'utilisateur est Admin
        if (!Auth::check() || Auth::user()->role !== 'Admin') {
            abort(403, 'Action non autorisée.');
        }

        // ✅ SÉCURITÉ : Validation stricte
        $validated = $request->validate([
            'annee' => 'required|integer|min:1900|max:2100|unique:archive,annee'
        ]);

        Archive::create(['annee' => $validated['annee']]);

        return redirect()->back()->with('success', 'Année ajoutée avec succès !');
    }

    /**
     * Supprimer une archive
     */
    public function destroy($id)
    {
        // ✅ SÉCURITÉ : Vérifier que l'utilisateur est Admin
        if (!Auth::check() || Auth::user()->role !== 'Admin') {
            abort(403, 'Action non autorisée.');
        }

        // ✅ SÉCURITÉ : Validation de l'ID
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if ($id === false) {
            abort(400, 'ID invalide.');
        }

        // ✅ SÉCURITÉ : Trouver l'archive
        $archive = Archive::findOrFail($id);

        // ⚠️ Vérifier s'il y a des actualités liées
        $actualitesCount = Actualite::where('archive_id', $id)->count();
        
        if ($actualitesCount > 0) {
            return redirect()->back()->with('error', 
                "Impossible de supprimer cette année car elle contient $actualitesCount actualité(s). Supprimez d'abord les actualités.");
        }

        // Supprimer l'archive
        $archive->delete();

        return redirect()->back()->with('success', 'Année supprimée avec succès !');
    }
}