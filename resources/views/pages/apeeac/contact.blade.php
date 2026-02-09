@extends('layouts.app')

@section('title', 'Contact - APEEAC')

@section('content')
<section class="hero">
    <h1>Nous contacter</h1>
    <p>Nous sommes à votre écoute</p>
</section>

<div class="container">
    
    <!-- Navigation rapide latérale -->
    <aside class="sidebar-nav">
        <h3 class="sidebar-title">Navigation</h3>
        <nav class="sidebar-menu">
            <a href="#coordonnees" class="sidebar-link">
                <span class="sidebar-icon">📧</span>
                <span class="sidebar-text">Coordonnées</span>
            </a>
            <a href="#formulaire" class="sidebar-link">
                <span class="sidebar-icon">✍️</span>
                <span class="sidebar-text">Formulaire</span>
            </a>
            <a href="#contacts-specifiques" class="sidebar-link">
                <span class="sidebar-icon">👥</span>
                <span class="sidebar-text">Contacts spécifiques</span>
            </a>
            <a href="#plan-acces" class="sidebar-link">
                <span class="sidebar-icon">🗺️</span>
                <span class="sidebar-text">Plan d'accès</span>
            </a>
        </nav>
    </aside>

    <!-- Contenu principal -->
    <div class="main-content">
    
    <div class="contact-grid">
        <section id="coordonnees" class="content-box">
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
                    Conservatoire Eugène Bozza<br>
                    8 rue Ferrand<br>
                    59300 Valenciennes
                </p>
            </div>

            <div class="contact-item">
                <h3>🕐 Permanences</h3>
                <p><strong>Tous les mercredis de 17h à 19h</strong></p>
                <p>À l'accueil du conservatoire</p>
                <p class="small-text">Venez nous rencontrer pour toute question, pour adhérer ou simplement pour discuter !</p>
            </div>
        </section>

        <section id="formulaire" class="content-box">
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

    <section id="contacts-specifiques" class="content-box">
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

    <section id="plan-acces" class="content-box map-section">
        <h2>Plan d'accès</h2>
        <p><strong>Conservatoire Eugène Bozza de Valenciennes</strong><br>
        8 rue Ferrand – 59300 Valenciennes</p>
        
        <p>Le conservatoire est accessible en transport en commun :</p>
        <ul>
            <li>🚌 <strong>Bus :</strong> Lignes 1, 2, 5, 10 - Arrêt "Hôtel de Ville" ou "Place d'Armes"</li>
            <li>🚂 <strong>Gare SNCF :</strong> Valenciennes (15 minutes à pied)</li>
            <li>🚗 <strong>En voiture :</strong> Parking Place d'Armes à proximité</li>
            <li>🅿️ <strong>Parking gratuit :</strong> Parking de l'Hôtel de Ville</li>
            <li>🚲 <strong>Vélos :</strong> Stations V'lille à proximité</li>
        </ul>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5090.712083576992!2d3.516247076825031!3d50.35991519387808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edc6fccb7f6d%3A0xc466206103618078!2sConservatoire%20Eug%C3%A8ne%20Bozza%2C%20De%20Valenciennes!5e0!3m2!1sfr!2sfr!4v1770562313136!5m2!1sfr!2sfr" 
                    width="100%" 
                    height="450" 
                    style="border:0; border-radius: 12px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    </div> <!-- Fin main-content -->
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.sidebar-link');
    
    function highlightNav() {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 150)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    }
    
    window.addEventListener('scroll', highlightNav);
    highlightNav(); // Appel initial
});
</script>

@endsection