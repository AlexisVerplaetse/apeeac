@extends('layouts.app')

@section('title', 'Je vends - Petites Annonces')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <h1>💰 Je vends</h1>
        <p>Instruments, partitions et accessoires musicaux</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Bouton retour -->
        <div class="back-button">
            <a href="{{ route('petites-annonces') }}" class="btn-back">← Retour aux petites annonces</a>
        </div>

        <!-- Bouton déposer une annonce -->
        <section class="deposit-section">
            <a href="{{ route('petites-annonces.vente.create') }}" class="btn btn-deposit">
                <span>➕</span> Déposer une annonce
            </a>
        </section>

        <!-- Liste des annonces -->
        <section class="annonces-section">
            <h2 class="section-title">Annonces de vente (12)</h2>
            
            <div class="annonces-grid">
                
                <!-- Annonce 1 -->
                <div class="annonce-card">
                    <div class="annonce-image">🎻</div>
                    <div class="annonce-content">
                        <h3>Violon 4/4 - Excellent état</h3>
                        <p class="annonce-price">450€</p>
                        <p class="annonce-description">Violon étudiant, excellent état. Avec archet et étui rigide. Parfait pour débutant/intermédiaire.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 2 jours</span>
                            <span class="annonce-location">📍 Paris 15ème</span>
                        </div>
                        <button class="btn-contact">Contacter le vendeur</button>
                    </div>
                </div>

                <!-- Annonce 2 -->
                <div class="annonce-card">
                    <div class="annonce-image">🎹</div>
                    <div class="annonce-content">
                        <h3>Piano numérique Yamaha P-45</h3>
                        <p class="annonce-price">350€</p>
                        <p class="annonce-description">Piano numérique 88 touches, peu utilisé. Vendu avec pédalier et support.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 3 jours</span>
                            <span class="annonce-location">📍 Paris 12ème</span>
                        </div>
                        <button class="btn-contact">Contacter le vendeur</button>
                    </div>
                </div>

                <!-- Annonce 3 -->
                <div class="annonce-card">
                    <div class="annonce-image">🎸</div>
                    <div class="annonce-content">
                        <h3>Guitare classique Alhambra</h3>
                        <p class="annonce-price">280€</p>
                        <p class="annonce-description">Guitare classique espagnole, table massive. Très bon son. Quelques traces d'usage.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 5 jours</span>
                            <span class="annonce-location">📍 Boulogne</span>
                        </div>
                        <button class="btn-contact">Contacter le vendeur</button>
                    </div>
                </div>

                <!-- Annonce 4 -->
                <div class="annonce-card">
                    <div class="annonce-image">🎺</div>
                    <div class="annonce-content">
                        <h3>Trompette Yamaha YTR-2330</h3>
                        <p class="annonce-price">520€</p>
                        <p class="annonce-description">Trompette étudiante, très bien entretenue. Révisée récemment. Embouchure incluse.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 1 semaine</span>
                            <span class="annonce-location">📍 Paris 16ème</span>
                        </div>
                        <button class="btn-contact">Contacter le vendeur</button>
                    </div>
                </div>

                <!-- Annonce 5 -->
                <div class="annonce-card">
                    <div class="annonce-image">🎼</div>
                    <div class="annonce-content">
                        <h3>Lot de partitions classiques</h3>
                        <p class="annonce-price">40€</p>
                        <p class="annonce-description">Environ 50 partitions variées : piano, violon, flûte. Bon état général.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 1 semaine</span>
                            <span class="annonce-location">📍 Paris 14ème</span>
                        </div>
                        <button class="btn-contact">Contacter le vendeur</button>
                    </div>
                </div>

                <!-- Annonce 6 -->
                <div class="annonce-card">
                    <div class="annonce-image">🥁</div>
                    <div class="annonce-content">
                        <h3>Batterie acoustique complète</h3>
                        <p class="annonce-price">650€</p>
                        <p class="annonce-description">Batterie 5 fûts + cymbales + hardware. Idéale pour débutant. Bon état.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 2 semaines</span>
                            <span class="annonce-location">📍 Issy-les-Moulineaux</span>
                        </div>
                        <button class="btn-contact">Contacter le vendeur</button>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
