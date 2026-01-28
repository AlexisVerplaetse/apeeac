<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required',
            'date_publication' => 'required|date',
            'archive_id' => 'required|exists:archive,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->only(['titre', 'contenu', 'date_publication', 'archive_id']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('actualites', 'public');
        }

        Actualite::create($data);

        return redirect()->back()->with('success', 'Actualité ajoutée avec succès !');
    }

    /**
     * Supprimer une actualité
     */
    public function destroy($id)
    {
        // Trouver l'actualité
        $actualite = Actualite::findOrFail($id);
        
        // Supprimer l'image du storage si elle existe
        if ($actualite->image) {
            Storage::disk('public')->delete($actualite->image);
        }
        
        // Supprimer l'actualité de la base de données
        $actualite->delete();
        
        // Rediriger avec message de succès
        return redirect()->back()->with('success', 'Actualité supprimée avec succès !');
    }

    /**
     * Afficher les actualités d'une année spécifique
     */
    public function indexByArchive($archive_id)
    {
        $actualites = Actualite::where('archive_id', $archive_id)
            ->orderBy('date_publication', 'desc')
            ->get();
        
        $archives = \App\Models\Archive::orderBy('annee', 'desc')->get();
        
        return view('pages.accueil', compact('actualites', 'archives'));
    }
}