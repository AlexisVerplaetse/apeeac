<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetitesAnnoncesController extends Controller
{
    /**
     * Afficher la liste des annonces de vente
     */
    public function indexVente()
    {
        // Récupérer les annonces de vente depuis la session
        $annonces = session('annonces_vente', $this->getDefaultVenteAnnonces());
        
        return view('pages.petites-annonces-vente', compact('annonces'));
    }

    /**
     * Afficher le formulaire de création d'annonce de vente
     */
    public function createVente()
    {
        return view('pages.petites-annonces-vente-depot');
    }

    /**
     * Enregistrer une nouvelle annonce de vente
     */
    public function storeVente(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'categorie' => 'required|string',
            'titre' => 'required|string|max:100',
            'prix' => 'required|numeric|min:0',
            'negociable' => 'nullable|boolean',
            'description' => 'required|string',
            'etat' => 'required|string',
            'localisation' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'nullable|string',
            'afficher_telephone' => 'nullable|boolean',
            'photos.*' => 'nullable|image|max:5120', // 5Mo max par image
        ]);

        // Récupérer les annonces existantes
        $annonces = session('annonces_vente', $this->getDefaultVenteAnnonces());

        // Créer la nouvelle annonce
        $nouvelleAnnonce = [
            'id' => time(), // ID temporaire basé sur le timestamp
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
            'date' => now()->diffForHumans(),
            'emoji' => $this->getEmojiForCategorie($validated['categorie']),
        ];

        // Ajouter la nouvelle annonce au début du tableau
        array_unshift($annonces, $nouvelleAnnonce);

        // Sauvegarder dans la session
        session(['annonces_vente' => $annonces]);

        return redirect()->route('petites-annonces.vente')
            ->with('success', 'Votre annonce a été publiée avec succès !');
    }

    /**
     * Afficher la liste des demandes de recherche
     */
    public function indexRecherche()
    {
        $annonces = session('annonces_recherche', $this->getDefaultRechercheAnnonces());
        
        return view('pages.petites-annonces-recherche', compact('annonces'));
    }

    /**
     * Afficher le formulaire de création de demande de recherche
     */
    public function createRecherche()
    {
        return view('pages.petites-annonces-recherche-depot');
    }

    /**
     * Enregistrer une nouvelle demande de recherche
     */
    public function storeRecherche(Request $request)
    {
        $validated = $request->validate([
            'categorie' => 'required|string',
            'titre' => 'required|string|max:100',
            'budget_min' => 'nullable|numeric|min:0',
            'budget_max' => 'required|numeric|min:0',
            'description' => 'required|string',
            'etat_souhaite' => 'nullable|string',
            'urgence' => 'nullable|string',
            'zone_geographique' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'nullable|string',
            'afficher_telephone' => 'nullable|boolean',
        ]);

        $annonces = session('annonces_recherche', $this->getDefaultRechercheAnnonces());

        $nouvelleAnnonce = [
            'id' => time(),
            'categorie' => $validated['categorie'],
            'titre' => $validated['titre'],
            'budget_min' => $validated['budget_min'] ?? null,
            'budget_max' => $validated['budget_max'],
            'description' => $validated['description'],
            'etat_souhaite' => $validated['etat_souhaite'] ?? null,
            'urgence' => $validated['urgence'] ?? 'normale',
            'zone_geographique' => $validated['zone_geographique'],
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'] ?? null,
            'afficher_telephone' => $request->has('afficher_telephone'),
            'date' => now()->diffForHumans(),
            'emoji' => $this->getEmojiForCategorie($validated['categorie']),
        ];

        array_unshift($annonces, $nouvelleAnnonce);
        session(['annonces_recherche' => $annonces]);

        return redirect()->route('petites-annonces.recherche')
            ->with('success', 'Votre demande a été publiée avec succès !');
    }

    /**
     * Afficher la liste des covoiturages
     */
    public function indexCovoiturage()
    {
        $annonces = session('annonces_covoiturage', $this->getDefaultCovoiturageAnnonces());
        
        return view('pages.petites-annonces-covoiturage', compact('annonces'));
    }

    /**
     * Afficher le formulaire de proposition de covoiturage
     */
    public function createCovoiturage()
    {
        return view('pages.petites-annonces-covoiturage-depot');
    }

    /**
     * Enregistrer une nouvelle proposition de covoiturage
     */
    public function storeCovoiturage(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:100',
            'point_depart' => 'required|string',
            'point_arrivee' => 'required|string',
            'trajet_retour' => 'nullable|boolean',
            'frequence' => 'required|string',
            'jours' => 'required|array',
            'heure_depart' => 'nullable',
            'heure_retour' => 'nullable',
            'places_disponibles' => 'required|integer|min:1',
            'participation' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'enfants_acceptes' => 'nullable|boolean',
            'instruments_volumineux' => 'nullable|boolean',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'afficher_telephone' => 'nullable|boolean',
        ]);

        $annonces = session('annonces_covoiturage', $this->getDefaultCovoiturageAnnonces());

        // Formater les jours
        $joursTexte = implode(', ', array_map('ucfirst', $validated['jours']));

        $nouvelleAnnonce = [
            'id' => time(),
            'titre' => $validated['titre'],
            'point_depart' => $validated['point_depart'],
            'point_arrivee' => $validated['point_arrivee'],
            'trajet_retour' => $request->has('trajet_retour'),
            'frequence' => $validated['frequence'],
            'jours' => $validated['jours'],
            'jours_texte' => $joursTexte,
            'heure_depart' => $validated['heure_depart'] ?? null,
            'heure_retour' => $validated['heure_retour'] ?? null,
            'places_disponibles' => $validated['places_disponibles'],
            'participation' => $validated['participation'] ?? null,
            'description' => $validated['description'] ?? '',
            'enfants_acceptes' => $request->has('enfants_acceptes'),
            'instruments_volumineux' => $request->has('instruments_volumineux'),
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'],
            'afficher_telephone' => $request->has('afficher_telephone'),
            'date' => now()->diffForHumans(),
        ];

        array_unshift($annonces, $nouvelleAnnonce);
        session(['annonces_covoiturage' => $annonces]);

        return redirect()->route('petites-annonces.covoiturage')
            ->with('success', 'Votre trajet a été publié avec succès !');
    }

    /**
     * Obtenir un emoji selon la catégorie
     */
    private function getEmojiForCategorie($categorie)
    {
        $emojis = [
            'instruments-cordes' => '🎻',
            'instruments-vent' => '🎺',
            'instruments-clavier' => '🎹',
            'instruments-percussion' => '🥁',
            'partitions' => '🎼',
            'accessoires' => '🎸',
            'autres' => '🎵',
        ];

        return $emojis[$categorie] ?? '🎵';
    }

    /**
     * Annonces de vente par défaut (exemples)
     */
    private function getDefaultVenteAnnonces()
    {
        return [
            [
                'id' => 1,
                'titre' => 'Violon 4/4 - Excellent état',
                'prix' => 450,
                'negociable' => false,
                'description' => 'Violon étudiant, excellent état. Avec archet et étui rigide. Parfait pour débutant/intermédiaire.',
                'localisation' => 'Paris 15ème',
                'date' => 'Il y a 2 jours',
                'emoji' => '🎻',
                'nom' => 'Martin',
                'prenom' => 'Sophie',
                'email' => 'contact@example.com',
            ],
            [
                'id' => 2,
                'titre' => 'Piano numérique Yamaha P-45',
                'prix' => 350,
                'negociable' => true,
                'description' => 'Piano numérique 88 touches, peu utilisé. Vendu avec pédalier et support.',
                'localisation' => 'Paris 12ème',
                'date' => 'Il y a 3 jours',
                'emoji' => '🎹',
                'nom' => 'Dupont',
                'prenom' => 'Jean',
                'email' => 'contact@example.com',
            ],
        ];
    }

    /**
     * Demandes de recherche par défaut
     */
    private function getDefaultRechercheAnnonces()
    {
        return [
            [
                'id' => 1,
                'titre' => 'Recherche guitare électrique',
                'budget_min' => 400,
                'budget_max' => 600,
                'description' => 'Recherche guitare électrique type Stratocaster pour élève confirmé. De préférence avec étui.',
                'zone_geographique' => 'Paris et proche banlieue',
                'date' => 'Il y a 1 jour',
                'emoji' => '🎸',
            ],
        ];
    }

    /**
     * Covoiturages par défaut
     */
    private function getDefaultCovoiturageAnnonces()
    {
        return [
            [
                'id' => 1,
                'titre' => 'Trajets réguliers les mercredis',
                'point_depart' => 'Boulogne-Billancourt',
                'point_arrivee' => 'Conservatoire',
                'places_disponibles' => 2,
                'jours_texte' => 'Mercredis',
                'participation' => 3,
                'description' => 'Je propose des places pour les cours du mercredi après-midi. Départ vers 13h30, retour vers 18h30.',
                'date' => 'Il y a 2 jours',
            ],
        ];
    }
}