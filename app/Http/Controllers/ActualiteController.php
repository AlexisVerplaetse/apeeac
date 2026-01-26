<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Models\Archive;

class ActualiteController extends Controller
{
    // Affiche les actualités pour une année donnée
    public function indexByArchive($archive_id)
    {
        $archive = Archive::findOrFail($archive_id);
        $actualites = $archive->actualites()->orderBy('date_publication', 'desc')->get();

        return view('actualites.index', compact('actualites', 'archive'));
    }
}
