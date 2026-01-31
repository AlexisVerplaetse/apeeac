<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\PetiteAnnonce;

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

Route::get('/qui-sommes-nous', function () {
    return view('pages.qui-sommes-nous');
})->name('qui-sommes-nous');

Route::get('/adherer', function () {
    return view('pages.adherer');
})->name('adherer');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')->with('success', 'Votre message a bien été envoyé !');
})->name('contact.send');

Route::get('/benevole', function () {
    return view('pages.benevole');
})->name('benevole');

Route::get('/administratif', function () {
    return view('pages.administratif');
})->name('administratif');

Route::get('/assurance', function () {
    return view('pages.assurance');
})->name('assurance');

Route::get('/conservatoire', function () {
    return view('pages.conservatoire');
})->name('conservatoire');

Route::get('/pepites-musicales', function () {
    return view('pages.pepites-musicales');
})->name('pepites-musicales');

Route::get('/vulgarisation', function () {
    return view('pages.vulgarisation');
})->name('vulgarisation');

Route::get('/trucs-astuces', function () {
    return view('pages.trucs-astuces');
})->name('trucs-astuces');

// ============================================
// PETITES ANNONCES AVEC BASE DE DONNÉES
// ============================================

Route::get('/petites-annonces', function () {
    return view('pages.petites-annonces');
})->name('petites-annonces');

// ==================== VENTE ====================

Route::get('/petites-annonces/vente', function () {
    // Récupérer les annonces de vente depuis la base de données
    $annoncesDB = PetiteAnnonce::ofType('vente')
        ->active()
        ->orderBy('created_at', 'desc')
        ->get();
    
    // Formater les données pour la vue
    $annonces = $annoncesDB->map(function($annonce) {
        return [
            'id' => $annonce->id,
            'titre' => $annonce->titre,
            'prix' => $annonce->prix,
            'negociable' => $annonce->negociable,
            'description' => $annonce->description,
            'localisation' => $annonce->localisation,
            'date' => $annonce->date_formattee,
            'emoji' => $annonce->emoji,
            'nom' => $annonce->nom,
            'prenom' => $annonce->prenom,
            'email' => $annonce->email,
            'telephone' => $annonce->telephone,
            'afficher_telephone' => $annonce->afficher_telephone,
        ];
    })->toArray();
    
    return view('pages.petites-annonces-vente', compact('annonces'));
})->name('petites-annonces.vente');

Route::get('/petites-annonces/vente/creer', function () {
    return view('pages.petites-annonces-vente-depot');
})->name('petites-annonces.vente.create');

Route::post('/petites-annonces/vente', function (Request $request) {
    $validated = $request->validate([
        'categorie' => 'required|string',
        'titre' => 'required|string|max:100',
        'prix' => 'required|numeric|min:0',
        'description' => 'required|string',
        'etat' => 'required|string',
        'localisation' => 'required|string',
        'nom' => 'required|string',
        'prenom' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'nullable|string',
    ]);

    // Créer l'annonce dans la base de données
    PetiteAnnonce::create([
        'type' => 'vente',
        'categorie' => $validated['categorie'],
        'titre' => $validated['titre'],
        'prix' => $validated['prix'],
        'negociable' => $request->has('negociable'),
        'description' => $validated['description'],
        'etat' => $validated['etat'],
        'localisation' => $validated['localisation'],
        'nom' => $validated['nom'],
        'prenom' => $validated['prenom'],
        'email' => $validated['email'],
        'telephone' => $validated['telephone'] ?? null,
        'afficher_telephone' => $request->has('afficher_telephone'),
        'statut' => 'active',
    ]);

    return redirect()->route('petites-annonces.vente')
        ->with('success', 'Votre annonce a été publiée avec succès !');
})->name('petites-annonces.vente.store');

// ==================== RECHERCHE ====================

Route::get('/petites-annonces/recherche', function () {
    // Récupérer les demandes de recherche depuis la base de données
    $annoncesDB = PetiteAnnonce::ofType('recherche')
        ->active()
        ->orderBy('created_at', 'desc')
        ->get();
    
    // Formater les données pour la vue
    $annonces = $annoncesDB->map(function($annonce) {
        return [
            'id' => $annonce->id,
            'titre' => $annonce->titre,
            'budget_min' => $annonce->budget_min,
            'budget_max' => $annonce->budget_max,
            'description' => $annonce->description,
            'zone_geographique' => $annonce->zone_geographique,
            'date' => $annonce->date_formattee,
            'emoji' => $annonce->emoji,
            'nom' => $annonce->nom,
            'prenom' => $annonce->prenom,
            'email' => $annonce->email,
            'telephone' => $annonce->telephone,
            'afficher_telephone' => $annonce->afficher_telephone,
        ];
    })->toArray();
    
    return view('pages.petites-annonces-recherche', compact('annonces'));
})->name('petites-annonces.recherche');

Route::get('/petites-annonces/recherche/creer', function () {
    return view('pages.petites-annonces-recherche-depot');
})->name('petites-annonces.recherche.create');

Route::post('/petites-annonces/recherche', function (Request $request) {
    $validated = $request->validate([
        'categorie' => 'required|string',
        'titre' => 'required|string|max:100',
        'budget_max' => 'required|numeric|min:0',
        'description' => 'required|string',
        'zone_geographique' => 'required|string',
        'nom' => 'required|string',
        'prenom' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'nullable|string',
    ]);

    // Créer la demande dans la base de données
    PetiteAnnonce::create([
        'type' => 'recherche',
        'categorie' => $validated['categorie'],
        'titre' => $validated['titre'],
        'budget_min' => $request->input('budget_min'),
        'budget_max' => $validated['budget_max'],
        'description' => $validated['description'],
        'etat_souhaite' => $request->input('etat_souhaite'),
        'urgence' => $request->input('urgence', 'normale'),
        'zone_geographique' => $validated['zone_geographique'],
        'nom' => $validated['nom'],
        'prenom' => $validated['prenom'],
        'email' => $validated['email'],
        'telephone' => $validated['telephone'] ?? null,
        'afficher_telephone' => $request->has('afficher_telephone'),
        'statut' => 'active',
    ]);

    return redirect()->route('petites-annonces.recherche')
        ->with('success', 'Votre demande a été publiée avec succès !');
})->name('petites-annonces.recherche.store');

// ==================== COVOITURAGE ====================

Route::get('/petites-annonces/covoiturage', function () {
    // Récupérer les covoiturages depuis la base de données
    $annoncesDB = PetiteAnnonce::ofType('covoiturage')
        ->active()
        ->orderBy('created_at', 'desc')
        ->get();
    
    // Formater les données pour la vue
    $annonces = $annoncesDB->map(function($annonce) {
        return [
            'id' => $annonce->id,
            'titre' => $annonce->titre,
            'point_depart' => $annonce->point_depart,
            'point_arrivee' => $annonce->point_arrivee,
            'places_disponibles' => $annonce->places_disponibles,
            'jours_texte' => $annonce->jours_texte,
            'participation' => $annonce->participation,
            'description' => $annonce->description,
            'date' => $annonce->date_formattee,
            'nom' => $annonce->nom,
            'prenom' => $annonce->prenom,
            'email' => $annonce->email,
            'telephone' => $annonce->telephone,
            'afficher_telephone' => $annonce->afficher_telephone,
        ];
    })->toArray();
    
    return view('pages.petites-annonces-covoiturage', compact('annonces'));
})->name('petites-annonces.covoiturage');

Route::get('/petites-annonces/covoiturage/creer', function () {
    return view('pages.petites-annonces-covoiturage-depot');
})->name('petites-annonces.covoiturage.create');

Route::post('/petites-annonces/covoiturage', function (Request $request) {
    $validated = $request->validate([
        'titre' => 'required|string|max:100',
        'point_depart' => 'required|string',
        'frequence' => 'required|string',
        'jours' => 'required|array',
        'places_disponibles' => 'required|integer|min:1',
        'nom' => 'required|string',
        'prenom' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'required|string',
    ]);

    // Créer le covoiturage dans la base de données
    PetiteAnnonce::create([
        'type' => 'covoiturage',
        'titre' => $validated['titre'],
        'point_depart' => $validated['point_depart'],
        'point_arrivee' => $request->input('point_arrivee', 'Conservatoire'),
        'trajet_retour' => $request->has('trajet_retour'),
        'frequence' => $validated['frequence'],
        'jours' => $validated['jours'],
        'heure_depart' => $request->input('heure_depart'),
        'heure_retour' => $request->input('heure_retour'),
        'places_disponibles' => $validated['places_disponibles'],
        'participation' => $request->input('participation'),
        'description' => $request->input('description'),
        'enfants_acceptes' => $request->has('enfants_acceptes'),
        'instruments_volumineux' => $request->has('instruments_volumineux'),
        'nom' => $validated['nom'],
        'prenom' => $validated['prenom'],
        'email' => $validated['email'],
        'telephone' => $validated['telephone'],
        'afficher_telephone' => $request->has('afficher_telephone'),
        'statut' => 'active',
    ]);

    return redirect()->route('petites-annonces.covoiturage')
        ->with('success', 'Votre trajet a été publié avec succès !');
})->name('petites-annonces.covoiturage.store');