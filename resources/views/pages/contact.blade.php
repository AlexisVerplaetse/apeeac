@extends('layouts.app')

@section('title', 'Contact - APEEAC')

@section('content')
<section class="hero">
    <h1>Nous contacter</h1>
    <p>Nous sommes à votre écoute</p>
</section>

<div class="container">
    <div class="contact-grid">
        <section class="content-box">
            <h2>Coordonnées</h2>
            
            <div class="contact-item">
                <h3>📧 Email</h3>
                <p><a href="mailto:contact@apeeac.fr">contact@apeeac.fr</a></p>
                <p class="small-text">Nous répondons sous 48h ouvrées</p>
            </div>

            <div class="contact-item">
                <h3>📞 Téléphone</h3>
                <p><a href="tel:0123456789">01 23 45 67 89</a></p>
                <p class="small-text">Du lundi au vendredi : 9h-12h / 14h-18h</p>
            </div>

            <div class="contact-item">
                <h3>📍 Adresse postale</h3>
                <p>
                    APEEAC<br>
                    Conservatoire Municipal<br>
                    123 rue de la Musique<br>
                    75000 Paris
                </p>
            </div>

            <div class="contact-item">
                <h3>🕐 Permanences</h3>
                <p><strong>Tous les mercredis de 17h à 19h</strong></p>
                <p>À l'accueil du conservatoire</p>
                <p class="small-text">Venez nous rencontrer pour toute question, pour adhérer ou simplement pour discuter !</p>
            </div>
        </section>

        <section class="content-box">
            <h2>Formulaire de contact</h2>
            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                
                <div class="form-group">
                    <label for="nom">Nom *</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom *</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone">
                </div>

                <div class="form-group">
                    <label for="sujet">Sujet *</label>
                    <select id="sujet" name="sujet" required>
                        <option value="">Choisissez un sujet</option>
                        <option value="adhesion">Adhésion</option>
                        <option value="benevole">Devenir bénévole</option>
                        <option value="evenement">Événements</option>
                        <option value="representation">Représentation des parents</option>
                        <option value="services">Services (assurance, covoiturage...)</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" name="rgpd" required>
                        J'accepte que mes données soient utilisées pour répondre à ma demande *
                    </label>
                    <p class="small-text">Vos données ne seront pas transmises à des tiers et seront conservées uniquement le temps nécessaire au traitement de votre demande.</p>
                </div>

                <button type="submit" class="btn">Envoyer le message</button>
            </form>
        </section>
    </div>

    <section class="content-box">
        <h2>Contacts spécifiques</h2>
        
        <div class="specific-contacts">
            <div class="contact-card">
                <h3>Adhésions</h3>
                <p><a href="mailto:adhesions@apeeac.fr">adhesions@apeeac.fr</a></p>
                <p class="small-text">Pour toute question relative à votre adhésion</p>
            </div>

            <div class="contact-card">
                <h3>Trésorerie</h3>
                <p><a href="mailto:tresorier@apeeac.fr">tresorier@apeeac.fr</a></p>
                <p class="small-text">Questions financières, factures, subventions</p>
            </div>

            <div class="contact-card">
                <h3>Événements</h3>
                <p><a href="mailto:evenements@apeeac.fr">evenements@apeeac.fr</a></p>
                <p class="small-text">Concerts, spectacles, organisation</p>
            </div>

            <div class="contact-card">
                <h3>Communication</h3>
                <p><a href="mailto:communication@apeeac.fr">communication@apeeac.fr</a></p>
                <p class="small-text">Newsletter, réseaux sociaux, site web</p>
            </div>
        </div>
    </section>

    <section class="content-box">
        <h2>Nous suivre</h2>
        <div class="social-links">
            <a href="#" class="social-btn">Facebook</a>
            <a href="#" class="social-btn">Instagram</a>
            <a href="#" class="social-btn">Twitter</a>
        </div>
        <p>Restez informés de toutes nos actualités sur les réseaux sociaux !</p>
    </section>

    <section class="content-box map-section">
        <h2>Plan d'accès</h2>
        <p>Le conservatoire est accessible en transport en commun :</p>
        <ul>
            <li>🚇 Métro : Ligne 1, station République (5 min à pied)</li>
            <li>🚌 Bus : Lignes 20, 65, 75 - Arrêt Conservatoire</li>
            <li>🚲 Vélib' : Station à 100m</li>
            <li>🅿️ Parking public rue de la Musique</li>
        </ul>
        <!-- Vous pouvez intégrer ici Google Maps ou OpenStreetMap -->
        <div class="map-placeholder">
            <p>[Carte interactive à intégrer]</p>
        </div>
    </section>
</div>
@endsection
