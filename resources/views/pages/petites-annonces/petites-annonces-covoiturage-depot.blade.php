@extends('layouts.app')

@section('title', 'Proposer un trajet de covoiturage')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <h1>🚗 Proposer un trajet de covoiturage</h1>
        <p>Partagez vos trajets vers le conservatoire</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Bouton retour -->
        <div class="back-button">
            <a href="{{ route('petites-annonces.covoiturage') }}" class="btn-back">← Retour aux trajets</a>
        </div>

        <!-- Formulaire de dépôt -->
        <section class="form-section">
            <div class="form-container">
                <h2 class="section-title">Informations sur le trajet</h2>
                
                <form action="{{ route('petites-annonces.covoiturage.store') }}" method="POST" class="annonce-form">
                    @csrf
                    
                    <!-- Type d'annonce (caché car on est sur covoiturage) -->
                    <input type="hidden" name="type" value="covoiturage">

                    <!-- Titre du trajet -->
                    <div class="form-group">
                        <label for="titre">Titre du trajet *</label>
                        <input type="text" id="titre" name="titre" placeholder="Ex: Trajets réguliers les mercredis" maxlength="100" required>
                        <small>Maximum 100 caractères</small>
                    </div>

                    <!-- Trajet -->
                    <div class="trajet-section">
                        <h3>📍 Itinéraire</h3>
                        
                        <div class="form-group">
                            <label for="point_depart">Point de départ *</label>
                            <input type="text" id="point_depart" name="point_depart" placeholder="Ex: Boulogne-Billancourt" required>
                        </div>

                        <div class="form-group">
                            <label for="point_arrivee">Point d'arrivée</label>
                            <input type="text" id="point_arrivee" name="point_arrivee" value="Conservatoire Municipal" readonly>
                            <small>Le point d'arrivée est toujours le conservatoire</small>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="trajet_retour" value="1" checked>
                                Je propose également le trajet retour
                            </label>
                        </div>
                    </div>

                    <!-- Horaires -->
                    <div class="horaires-section">
                        <h3>🕐 Horaires et fréquence</h3>
                        
                        <div class="form-group">
                            <label for="frequence">Fréquence *</label>
                            <select id="frequence" name="frequence" required>
                                <option value="">Sélectionnez une fréquence</option>
                                <option value="ponctuel">Ponctuel (une fois)</option>
                                <option value="hebdomadaire">Hebdomadaire</option>
                                <option value="bihebdomadaire">Bihebdomadaire</option>
                                <option value="mensuel">Mensuel</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jours">Jour(s) de la semaine *</label>
                            <div class="jours-selection">
                                <label><input type="checkbox" name="jours[]" value="lundi"> Lundi</label>
                                <label><input type="checkbox" name="jours[]" value="mardi"> Mardi</label>
                                <label><input type="checkbox" name="jours[]" value="mercredi"> Mercredi</label>
                                <label><input type="checkbox" name="jours[]" value="jeudi"> Jeudi</label>
                                <label><input type="checkbox" name="jours[]" value="vendredi"> Vendredi</label>
                                <label><input type="checkbox" name="jours[]" value="samedi"> Samedi</label>
                                <label><input type="checkbox" name="jours[]" value="dimanche"> Dimanche</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="heure_depart">Heure de départ (aller)</label>
                                <input type="time" id="heure_depart" name="heure_depart">
                            </div>
                            <div class="form-group">
                                <label for="heure_retour">Heure de départ (retour)</label>
                                <input type="time" id="heure_retour" name="heure_retour">
                            </div>
                        </div>
                    </div>

                    <!-- Détails du covoiturage -->
                    <div class="details-section">
                        <h3>ℹ️ Détails</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="places_disponibles">Nombre de places disponibles *</label>
                                <input type="number" id="places_disponibles" name="places_disponibles" min="1" max="7" value="1" required>
                            </div>
                            <div class="form-group">
                                <label for="participation">Participation aux frais (€)</label>
                                <input type="number" id="participation" name="participation" min="0" step="0.5" placeholder="3">
                                <small>Laissez vide si gratuit</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description / Informations complémentaires</label>
                            <textarea id="description" name="description" rows="4" placeholder="Précisions sur le trajet, points de rencontre possibles, conditions particulières..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="enfants_acceptes" value="1" checked>
                                J'accepte les enfants non accompagnés
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="instruments_volumineux" value="1">
                                Je peux transporter des instruments volumineux (violoncelle, contrebasse, etc.)
                            </label>
                        </div>
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
                                <label for="telephone">Téléphone *</label>
                                <input type="tel" id="telephone" name="telephone" placeholder="06 12 34 56 78" required>
                                <small>Recommandé pour les covoiturages</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="afficher_telephone" value="1" checked>
                                Afficher mon numéro de téléphone dans l'annonce
                            </label>
                        </div>
                    </div>

                    <!-- Conditions -->
                    <div class="form-group conditions">
                        <label>
                            <input type="checkbox" name="accepte_conditions" required>
                            J'accepte les <a href="#" target="_blank">conditions d'utilisation</a>, certifie être adhérent de l'APEEAC et disposer d'une assurance auto valide *
                        </label>
                    </div>

                    <!-- Boutons -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-submit">
                            <span>✓</span> Publier le trajet
                        </button>
                        <a href="{{ route('petites-annonces.covoiturage') }}" class="btn btn-cancel">Annuler</a>
                    </div>
                </form>
            </div>

            <!-- Conseils -->
            <aside class="conseils-sidebar">
                <div class="conseil-card">
                    <h3>💡 Conseils covoiturage</h3>
                    <ul>
                        <li>✓ Soyez ponctuel aux rendez-vous</li>
                        <li>✓ Communiquez en cas d'imprévu</li>
                        <li>✓ Respectez votre engagement</li>
                        <li>✓ Gardez votre véhicule propre</li>
                        <li>✓ Soyez courtois avec les passagers</li>
                        <li>✓ Vérifiez votre assurance auto</li>
                    </ul>
                </div>

                <div class="conseil-card">
                    <h3>⚠️ Sécurité</h3>
                    <p>Assurez-vous que votre assurance auto couvre le covoiturage. L'APEEAC n'est pas responsable des trajets entre particuliers.</p>
                </div>

                <div class="conseil-card">
                    <h3>💰 Participation aux frais</h3>
                    <p>La participation aux frais doit rester raisonnable (essence, péage, parking). Le covoiturage ne doit pas être une source de profit.</p>
                </div>
            </aside>
        </section>

    </div>
@endsection
