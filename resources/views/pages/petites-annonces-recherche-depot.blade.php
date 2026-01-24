@extends('layouts.app')

@section('title', 'Déposer une demande de recherche')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <h1>🔍 Déposer une demande de recherche</h1>
        <p>Dites-nous ce que vous recherchez</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Bouton retour -->
        <div class="back-button">
            <a href="{{ route('petites-annonces.recherche') }}" class="btn-back">← Retour aux demandes</a>
        </div>

        <!-- Formulaire de dépôt -->
        <section class="form-section">
            <div class="form-container">
                <h2 class="section-title">Informations sur votre recherche</h2>
                
                <form action="{{ route('petites-annonces.recherche.store') }}" method="POST" class="annonce-form">
                    @csrf
                    
                    <!-- Type d'annonce (caché car on est sur recherche) -->
                    <input type="hidden" name="type" value="recherche">

                    <!-- Catégorie -->
                    <div class="form-group">
                        <label for="categorie">Catégorie *</label>
                        <select id="categorie" name="categorie" required>
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="instruments-cordes">Instruments à cordes</option>
                            <option value="instruments-vent">Instruments à vent</option>
                            <option value="instruments-clavier">Instruments à clavier</option>
                            <option value="instruments-percussion">Instruments de percussion</option>
                            <option value="partitions">Partitions</option>
                            <option value="accessoires">Accessoires</option>
                            <option value="autres">Autres</option>
                        </select>
                    </div>

                    <!-- Titre de la demande -->
                    <div class="form-group">
                        <label for="titre">Titre de votre recherche *</label>
                        <input type="text" id="titre" name="titre" placeholder="Ex: Recherche guitare électrique" maxlength="100" required>
                        <small>Maximum 100 caractères</small>
                    </div>

                    <!-- Budget -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="budget_min">Budget minimum (€)</label>
                            <input type="number" id="budget_min" name="budget_min" placeholder="400" min="0" step="1">
                        </div>
                        <div class="form-group">
                            <label for="budget_max">Budget maximum (€) *</label>
                            <input type="number" id="budget_max" name="budget_max" placeholder="600" min="0" step="1" required>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description détaillée *</label>
                        <textarea id="description" name="description" rows="6" placeholder="Décrivez précisément ce que vous recherchez : marque, modèle, taille, état souhaité, caractéristiques importantes..." required></textarea>
                        <small>Plus vous êtes précis, plus vous avez de chances de trouver</small>
                    </div>

                    <!-- État souhaité -->
                    <div class="form-group">
                        <label for="etat_souhaite">État souhaité</label>
                        <select id="etat_souhaite" name="etat_souhaite">
                            <option value="">Peu importe</option>
                            <option value="neuf">Neuf uniquement</option>
                            <option value="excellent">Excellent état minimum</option>
                            <option value="tres-bon">Très bon état minimum</option>
                            <option value="bon">Bon état minimum</option>
                            <option value="tous">Tous états acceptés</option>
                        </select>
                    </div>

                    <!-- Urgence -->
                    <div class="form-group">
                        <label for="urgence">Urgence de la demande</label>
                        <select id="urgence" name="urgence">
                            <option value="normale">Normale</option>
                            <option value="rapide">Assez urgent (1 mois)</option>
                            <option value="tres-urgent">Très urgent (1 semaine)</option>
                        </select>
                    </div>

                    <!-- Zone géographique -->
                    <div class="form-group">
                        <label for="zone_geographique">Zone géographique *</label>
                        <input type="text" id="zone_geographique" name="zone_geographique" placeholder="Ex: Paris et proche banlieue" required>
                        <small>Indiquez où vous êtes prêt(e) à vous déplacer</small>
                    </div>

                    <!-- Informations de contact -->
                    <div class="contact-section">
                        <h3>Informations de contact</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">Nom *</label>
                                <input type="text" id="nom" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="tel" id="telephone" name="telephone" placeholder="06 12 34 56 78">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="afficher_telephone" value="1">
                                Afficher mon numéro de téléphone dans l'annonce
                            </label>
                        </div>
                    </div>

                    <!-- Conditions -->
                    <div class="form-group conditions">
                        <label>
                            <input type="checkbox" name="accepte_conditions" required>
                            J'accepte les <a href="#" target="_blank">conditions d'utilisation</a> et certifie être adhérent de l'APEEAC *
                        </label>
                    </div>

                    <!-- Boutons -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-submit">
                            <span>✓</span> Publier la demande
                        </button>
                        <a href="{{ route('petites-annonces.recherche') }}" class="btn btn-cancel">Annuler</a>
                    </div>
                </form>
            </div>

            <!-- Conseils -->
            <aside class="conseils-sidebar">
                <div class="conseil-card">
                    <h3>💡 Conseils pour votre recherche</h3>
                    <ul>
                        <li>✓ Soyez précis sur vos critères</li>
                        <li>✓ Indiquez un budget réaliste</li>
                        <li>✓ Mentionnez la marque si importante</li>
                        <li>✓ Précisez la taille/niveau si pertinent</li>
                        <li>✓ Restez joignable pour les réponses</li>
                        <li>✓ Élargissez votre zone si possible</li>
                    </ul>
                </div>

                <div class="conseil-card">
                    <h3>📧 Vous serez notifié</h3>
                    <p>Lorsqu'un adhérent répondra à votre demande, vous recevrez un email avec ses coordonnées.</p>
                </div>
            </aside>
        </section>

    </div>
@endsection
