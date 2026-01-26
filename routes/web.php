<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Pages publiques
|--------------------------------------------------------------------------
*/

use App\Models\Archive;

Route::get('/', function () {
    $archives = Archive::all();

    return view('pages.accueil', compact('archives'));
})->name('home');

Route::get('/accueil', function () {
    return view('pages.accueil');
})->name('accueil');

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

Route::get('/test', function () {
    return view('pages.test');
})->name('test');
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
| Pages protégées
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
| Admin 
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\ArchiveController;

Route::post('/archive', [ArchiveController::class, 'store'])
    ->middleware('auth');

Route::get('/accueil', [ArchiveController::class, 'index'])->name('accueil');


use App\Http\Controllers\ActualiteController;

// Page pour voir les actualités d'une année
Route::get('/actualites/{archive_id}', [ActualiteController::class, 'indexByArchive'])
    ->name('actualites.annee');

// Supprimer une année (Admin)
Route::delete('/archive/{id}', [ArchiveController::class, 'destroy'])
    ->middleware('auth')
    ->name('archive.destroy');
