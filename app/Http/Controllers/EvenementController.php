<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
        ]);

        Evenement::create([
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $request->event_date,
        ]);

        return redirect()->back()->with('success', 'Événement ajouté avec succès');
    }

    public function destroy($id)
    {
        // Vérifier que l'utilisateur est Admin
        if (!Auth::check() || Auth::user()->role !== 'Admin') {
            abort(403, 'Action non autorisée.');
        }

        // Validation de l'ID
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if ($id === false) {
            abort(400, 'ID invalide.');
        }

        // Trouver et supprimer l'événement
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();

        return redirect()->back()->with('success', 'Événement supprimé avec succès !');
    }
}