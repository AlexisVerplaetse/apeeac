<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.accueil');
})->name('home');

Route::get('/accueil', function () {
    return view('pages.accueil');
})->name('accueil');

Route::get('/actualites', function () {
    return view('pages.actualites');
})->name('actualites');

Route::get('/apeeac', function () {
    return view('pages.apeeac');
})->name('apeeac');

// Nouvelles routes
Route::get('/qui-sommes-nous', function () {
    return view('pages.qui-sommes-nous');
})->name('qui-sommes-nous');

Route::get('/adherer', function () {
    return view('pages.adherer');
})->name('adherer');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Traitement du formulaire de contact
Route::post('/contact', function () {
    // Logique de traitement du formulaire à implémenter
    // Validation des données
    // Envoi d'email
    // Redirection avec message de succès
    return redirect()->route('contact')->with('success', 'Votre message a bien été envoyé !');
})->name('contact.send');

Route::get('/benevole', function () {
    return view('pages.benevole');
})->name('benevole');

Route::get('/administratif', function () {
    return view('pages.administratif');
})->name('administratif');

// Routes existantes
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

Route::get('/petites-annonces/vente', function () {
    return view('pages.petites-annonces-vente');
})->name('petites-annonces.vente');

Route::get('/petites-annonces/recherche', function () {
    return view('pages.petites-annonces-recherche');
})->name('petites-annonces.recherche');

Route::get('/petites-annonces/covoiturage', function () {
    return view('pages.petites-annonces-covoiturage');
})->name('petites-annonces.covoiturage');

Route::get('/vulgarisation', function () {
    return view('pages.vulgarisation');
})->name('vulgarisation');

Route::get('/trucs-astuces', function () {
    return view('pages.trucs-astuces');
})->name('trucs-astuces');