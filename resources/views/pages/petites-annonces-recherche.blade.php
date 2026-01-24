@extends('layouts.app')

@section('title', 'Je recherche - Petites Annonces')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <h1>🔍 Je recherche</h1>
        <p>Trouvez l'instrument ou l'accessoire que vous cherchez</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Bouton retour -->
        <div class="back-button">
            <a href="{{ route('petites-annonces') }}" class="btn-back">← Retour aux petites annonces</a>
        </div>

        <!-- Bouton déposer une demande -->
        <section class="deposit-section">
            <a href="{{ route('petites-annonces.recherche.create') }}" class="btn btn-deposit">
                <span>➕</span> Déposer une demande
            </a>
        </section>

        <!-- Liste des demandes -->
        <section class="annonces-section">
            <h2 class="section-title">Demandes en cours (8)</h2>
            
            <div class="annonces-grid">
                
                <!-- Demande 1 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">🎸</div>
                    <div class="annonce-content">
                        <h3>Recherche guitare électrique</h3>
                        <p class="annonce-budget">Budget : 400-600€</p>
                        <p class="annonce-description">Recherche guitare électrique type Stratocaster pour élève confirmé. De préférence avec étui.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 1 jour</span>
                            <span class="annonce-location">📍 Paris et proche banlieue</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

                <!-- Demande 2 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">🎷</div>
                    <div class="annonce-content">
                        <h3>Saxophone alto débutant</h3>
                        <p class="annonce-budget">Budget : 300-500€</p>
                        <p class="annonce-description">Cherche saxophone alto pour débuter. Bon état souhaité. Marque Yamaha ou équivalent.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 3 jours</span>
                            <span class="annonce-location">📍 Paris Sud</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

                <!-- Demande 3 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">🎻</div>
                    <div class="annonce-content">
                        <h3>Violoncelle 3/4</h3>
                        <p class="annonce-budget">Budget : 800-1200€</p>
                        <p class="annonce-description">Recherche violoncelle 3/4 pour enfant de 10 ans. Archet et housse si possible.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 4 jours</span>
                            <span class="annonce-location">📍 Région parisienne</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

                <!-- Demande 4 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">🎹</div>
                    <div class="annonce-content">
                        <h3>Clavier arrangeur</h3>
                        <p class="annonce-budget">Budget : 200-350€</p>
                        <p class="annonce-description">Recherche clavier 61 touches minimum avec fonctions d'accompagnement. Pour débuter.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 5 jours</span>
                            <span class="annonce-location">📍 Paris Ouest</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

                <!-- Demande 5 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">🎺</div>
                    <div class="annonce-content">
                        <h3>Cor d'harmonie</h3>
                        <p class="annonce-budget">Budget : 1000-1500€</p>
                        <p class="annonce-description">Cherche cor d'harmonie niveau intermédiaire. Simple ou double selon disponibilité.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 1 semaine</span>
                            <span class="annonce-location">📍 Paris et IDF</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

                <!-- Demande 6 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">📚</div>
                    <div class="annonce-content">
                        <h3>Méthode de piano niveau 2</h3>
                        <p class="annonce-budget">Budget : 20-40€</p>
                        <p class="annonce-description">Recherche méthodes de piano Charles Hervé & Jacqueline Pouillard niveau 2 et 3.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 1 semaine</span>
                            <span class="annonce-location">📍 Paris Centre</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

                <!-- Demande 7 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">🎼</div>
                    <div class="annonce-content">
                        <h3>Pupitre professionnel</h3>
                        <p class="annonce-budget">Budget : 30-60€</p>
                        <p class="annonce-description">Cherche pupitre solide et réglable pour usage quotidien. Pliable de préférence.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 2 semaines</span>
                            <span class="annonce-location">📍 Paris 18ème</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

                <!-- Demande 8 -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">🎸</div>
                    <div class="annonce-content">
                        <h3>Ukulélé soprano</h3>
                        <p class="annonce-budget">Budget : 50-100€</p>
                        <p class="annonce-description">Recherche ukulélé soprano pour enfant de 8 ans. Bon rapport qualité/prix.</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 Il y a 2 semaines</span>
                            <span class="annonce-location">📍 Banlieue Ouest</span>
                        </div>
                        <button class="btn-contact recherche-btn">Proposer un instrument</button>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
