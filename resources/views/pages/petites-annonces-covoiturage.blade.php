@extends('layouts.app')

@section('title', 'Covoiturage - Petites Annonces')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <h1>🚗 Covoiturage</h1>
        <p>Partagez vos trajets vers le conservatoire</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Bouton retour -->
        <div class="back-button">
            <a href="{{ route('petites-annonces') }}" class="btn-back">← Retour aux petites annonces</a>
        </div>

        <!-- Bouton proposer un trajet -->
        <section class="deposit-section">
            <button class="btn btn-deposit">
                <span>➕</span> Proposer un trajet
            </button>
        </section>

        <!-- Liste des covoiturages -->
        <section class="annonces-section">
            <h2 class="section-title">Trajets disponibles (5)</h2>
            
            <div class="annonces-grid">
                
                <!-- Covoiturage 1 -->
                <div class="annonce-card covoiturage-card">
                    <div class="annonce-header covoiturage-header">
                        <div class="trajet-icon">🚗</div>
                        <div class="trajet-info">
                            <div class="trajet-route">
                                <span class="point-depart">📍 Boulogne-Billancourt</span>
                                <span class="fleche">→</span>
                                <span class="point-arrivee">🎵 Conservatoire</span>
                            </div>
                        </div>
                    </div>
                    <div class="annonce-content">
                        <h3>Trajets réguliers les mercredis</h3>
                        <p class="covoiturage-description">
                            Je propose des places pour les cours du mercredi après-midi. Départ vers 13h30, retour vers 18h30.
                        </p>
                        <div class="covoiturage-details">
                            <div class="detail-item">
                                <span class="detail-icon">👥</span>
                                <span>2 places disponibles</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>Tous les mercredis</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">💰</span>
                                <span>Participation aux frais : 3€/trajet</span>
                            </div>
                        </div>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Publié il y a 2 jours</span>
                        </div>
                        <button class="btn-contact covoiturage-btn">Contacter le conducteur</button>
                    </div>
                </div>

                <!-- Covoiturage 2 -->
                <div class="annonce-card covoiturage-card">
                    <div class="annonce-header covoiturage-header">
                        <div class="trajet-icon">🚗</div>
                        <div class="trajet-info">
                            <div class="trajet-route">
                                <span class="point-depart">📍 Issy-les-Moulineaux</span>
                                <span class="fleche">→</span>
                                <span class="point-arrivee">🎵 Conservatoire</span>
                            </div>
                        </div>
                    </div>
                    <div class="annonce-content">
                        <h3>Lundis et vendredis soir</h3>
                        <p class="covoiturage-description">
                            Trajet pour les cours du soir (18h-20h). Possibilité de déposer devant le conservatoire.
                        </p>
                        <div class="covoiturage-details">
                            <div class="detail-item">
                                <span class="detail-icon">👥</span>
                                <span>3 places disponibles</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>Lundis et vendredis</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">💰</span>
                                <span>Participation aux frais : 2€/trajet</span>
                            </div>
                        </div>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Publié il y a 5 jours</span>
                        </div>
                        <button class="btn-contact covoiturage-btn">Contacter le conducteur</button>
                    </div>
                </div>

                <!-- Covoiturage 3 -->
                <div class="annonce-card covoiturage-card">
                    <div class="annonce-header covoiturage-header">
                        <div class="trajet-icon">🚗</div>
                        <div class="trajet-info">
                            <div class="trajet-route">
                                <span class="point-depart">📍 Paris 15ème</span>
                                <span class="fleche">→</span>
                                <span class="point-arrivee">🎵 Conservatoire</span>
                            </div>
                        </div>
                    </div>
                    <div class="annonce-content">
                        <h3>Samedis matin</h3>
                        <p class="covoiturage-description">
                            Covoiturage pour les cours du samedi matin (9h-12h). Trajet direct, environ 15 minutes.
                        </p>
                        <div class="covoiturage-details">
                            <div class="detail-item">
                                <span class="detail-icon">👥</span>
                                <span>1 place disponible</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>Tous les samedis</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">💰</span>
                                <span>Gratuit (entraide)</span>
                            </div>
                        </div>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Publié il y a 1 semaine</span>
                        </div>
                        <button class="btn-contact covoiturage-btn">Contacter le conducteur</button>
                    </div>
                </div>

                <!-- Covoiturage 4 -->
                <div class="annonce-card covoiturage-card">
                    <div class="annonce-header covoiturage-header">
                        <div class="trajet-icon">🚗</div>
                        <div class="trajet-info">
                            <div class="trajet-route">
                                <span class="point-depart">📍 Meudon</span>
                                <span class="fleche">→</span>
                                <span class="point-arrivee">🎵 Conservatoire</span>
                            </div>
                        </div>
                    </div>
                    <div class="annonce-content">
                        <h3>Mardis après-midi</h3>
                        <p class="covoiturage-description">
                            Trajet régulier le mardi pour cours de 14h. Retour vers 16h30. Place pour 2 enfants.
                        </p>
                        <div class="covoiturage-details">
                            <div class="detail-item">
                                <span class="detail-icon">👥</span>
                                <span>2 places disponibles</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>Tous les mardis</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">💰</span>
                                <span>Participation aux frais : 4€/trajet</span>
                            </div>
                        </div>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Publié il y a 1 semaine</span>
                        </div>
                        <button class="btn-contact covoiturage-btn">Contacter le conducteur</button>
                    </div>
                </div>

                <!-- Covoiturage 5 -->
                <div class="annonce-card covoiturage-card">
                    <div class="annonce-header covoiturage-header">
                        <div class="trajet-icon">🚗</div>
                        <div class="trajet-info">
                            <div class="trajet-route">
                                <span class="point-depart">📍 Vanves</span>
                                <span class="fleche">→</span>
                                <span class="point-arrivee">🎵 Conservatoire</span>
                            </div>
                        </div>
                    </div>
                    <div class="annonce-content">
                        <h3>Jeudis soir</h3>
                        <p class="covoiturage-description">
                            Covoiturage pour cours du jeudi soir (19h-21h). Possibilité de récupération après le cours.
                        </p>
                        <div class="covoiturage-details">
                            <div class="detail-item">
                                <span class="detail-icon">👥</span>
                                <span>2 places disponibles</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>Tous les jeudis</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">💰</span>
                                <span>Participation aux frais : 3€/trajet</span>
                            </div>
                        </div>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Publié il y a 2 semaines</span>
                        </div>
                        <button class="btn-contact covoiturage-btn">Contacter le conducteur</button>
                    </div>
                </div>

            </div>
        </section>

        <!-- Informations covoiturage -->
        <section class="info-covoiturage">
            <h2 class="section-title">ℹ️ Informations sur le covoiturage</h2>
            <div class="info-cards">
                <div class="info-card">
                    <div class="info-icon">🤝</div>
                    <h3>Entraide et solidarité</h3>
                    <p>Le covoiturage entre adhérents est un service d'entraide. Respectez les horaires et engagements pris.</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">💰</div>
                    <h3>Participation aux frais</h3>
                    <p>La participation aux frais d'essence est laissée à la discrétion de chacun. Soyez fair-play !</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">⚠️</div>
                    <h3>Responsabilité</h3>
                    <p>L'APEEAC n'est pas responsable des trajets. Vérifiez toujours l'assurance du véhicule.</p>
                </div>
            </div>
        </section>

    </div>
@endsection
