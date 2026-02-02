<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\EvenementController;

/*
|--------------------------------------------------------------------------
| Pages publiques
|--------------------------------------------------------------------------
*/

// Page d'accueil avec actualités (UNIQUE)
Route::get('/', [ArchiveController::class, 'index'])->name('home');
Route::get('/accueil', [ArchiveController::class, 'index'])->name('accueil');

Route::get('/apeeac', function () {
    return view('pages.apeeac.apeeac');
})->name('apeeac');

Route::get('/assurance', function () {
    return view('pages.assurance');
})->name('assurance');

Route::get('/conservatoire', function () {
    return view('pages.conservatoire');
})->name('conservatoire');

Route::get('/pepites-musicales', function () {
    return view('pages.pepites-musicales');
})->name('pepites-musicales');

Route::get('/petites-annonces', function () {
    return view('pages.petites-annonces');
})->name('petites-annonces');

Route::get('/vulgarisation', function () {
    return view('pages.vulgarisation');
})->name('vulgarisation');

Route::get('/trucs-astuces', function () {
    return view('pages.trucs-astuces');
})->name('trucs-astuces');

Route::get('/administratif', function () {
    return view('pages.administratif');
})->name('administratif');

// Voir les actualités d'une année spécifique (PUBLIC)
Route::get('/actualites/{archive_id}', [ActualiteController::class, 'indexByArchive'])
    ->name('actualites.annee');

/*
|--------------------------------------------------------------------------
| Authentification
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Pages protégées (Utilisateur connecté)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Pages APEEAC
|--------------------------------------------------------------------------
*/

Route::get('/qui-sommes-nous', function () {
    return view('pages.apeeac.qui-sommes-nous');
})->name('qui-sommes-nous');

Route::get('/adherer', function () {
    return view('pages.apeeac.adherer');
})->name('adherer');

Route::get('/contact', function () {
    return view('pages.apeeac.contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')
        ->with('success', 'Votre message a bien été envoyé !');
})->name('contact.send');

Route::get('/benevole', function () {
    return view('pages.apeeac.benevole');
})->name('benevole');

/*
|--------------------------------------------------------------------------
| ⭐ Admin UNIQUEMENT - Archives & Actualités (SÉCURISÉ)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    
    // Gestion des archives (Admin uniquement - vérification dans le contrôleur)
    Route::post('/archive', [ArchiveController::class, 'store'])
        ->name('archive.store');

    Route::delete('/archive/{id}', [ArchiveController::class, 'destroy'])
        ->name('archive.destroy');

    // Gestion des actualités (Admin uniquement - vérification dans le contrôleur)
    Route::post('/actualite', [ActualiteController::class, 'store'])
        ->name('actualite.store');

    Route::delete('/actualite/{id}', [ActualiteController::class, 'destroy'])
        ->name('actualite.destroy');
});

// Gestion des evenements (authentification requise)
Route::middleware(['auth'])->group(function () {
    Route::post('/evenements', [EvenementController::class, 'store'])
        ->name('evenements');
});

// Ajouter cette ligne dans la section des routes authentifiées
Route::middleware(['auth'])->group(function () {
    Route::post('/evenements', [EvenementController::class, 'store'])
        ->name('evenements');
    
    // ✅ Ajouter cette nouvelle route
    Route::delete('/evenements/{id}', [EvenementController::class, 'destroy'])
        ->name('evenements.destroy');
});


//api pour récupérer les événements a la fin de web.php
Route::get('/api/evenements', function () {
    return \App\Models\Evenement::all();
});