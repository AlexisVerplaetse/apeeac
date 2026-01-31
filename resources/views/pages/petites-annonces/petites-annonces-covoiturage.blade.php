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
            <a href="{{ route('petites-annonces.covoiturage.create') }}" class="btn btn-deposit">
                <span>➕</span> Proposer un trajet
            </a>
        </section>

        <!-- Liste des covoiturages -->
        <section class="annonces-section">
            <h2 class="section-title">Trajets disponibles ({{ count($annonces) }})</h2>
            
            @if(session('success'))
                <div class="alert-success">
                    ✓ {{ session('success') }}
                </div>
            @endif
            
            <div class="annonces-grid">
                
                @forelse($annonces as $annonce)
                <!-- Covoiturage -->
                <div class="annonce-card covoiturage-card">
                    <div class="annonce-header covoiturage-header">
                        <div class="trajet-icon">🚗</div>
                        <div class="trajet-info">
                            <div class="trajet-route">
                                <span class="point-depart">📍 {{ $annonce['point_depart'] }}</span>
                                <span class="fleche">→</span>
                                <span class="point-arrivee">🎵 {{ $annonce['point_arrivee'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="annonce-content">
                        <h3>{{ $annonce['titre'] }}</h3>
                        <p class="covoiturage-description">
                            {{ $annonce['description'] }}
                        </p>
                        <div class="covoiturage-details">
                            <div class="detail-item">
                                <span class="detail-icon">👥</span>
                                <span>{{ $annonce['places_disponibles'] }} place(s) disponible(s)</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">📅</span>
                                <span>{{ $annonce['jours_texte'] }}</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-icon">💰</span>
                                <span>
                                    @if(isset($annonce['participation']) && $annonce['participation'])
                                        Participation aux frais : {{ $annonce['participation'] }}€/trajet
                                    @else
                                        Gratuit (entraide)
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 {{ $annonce['date'] }}</span>
                        </div>
                        <button class="btn-contact covoiturage-btn" onclick="alert('Contact : {{ $annonce['prenom'] ?? '' }} {{ $annonce['nom'] ?? '' }}\nEmail : {{ $annonce['email'] ?? '' }}{{ isset($annonce['telephone']) && ($annonce['afficher_telephone'] ?? false) ? '\nTél : ' . $annonce['telephone'] : '' }}')">
                            Contacter le conducteur
                        </button>
                    </div>
                </div>
                @empty
                <div class="no-annonces">
                    <p>Aucun trajet disponible pour le moment. Soyez le premier à proposer !</p>
                </div>
                @endforelse

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

    </div
@endsection
