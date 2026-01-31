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
            <h2 class="section-title">Demandes en cours ({{ count($annonces) }})</h2>
            
            @if(session('success'))
                <div class="alert-success">
                    ✓ {{ session('success') }}
                </div>
            @endif
            
            <div class="annonces-grid">
                
                @forelse($annonces as $annonce)
                <!-- Demande -->
                <div class="annonce-card recherche-card">
                    <div class="annonce-image recherche-image">{{ $annonce['emoji'] }}</div>
                    <div class="annonce-content">
                        <h3>{{ $annonce['titre'] }}</h3>
                        <p class="annonce-budget">
                            Budget : 
                            @if(isset($annonce['budget_min']) && $annonce['budget_min'])
                                {{ number_format($annonce['budget_min'], 0, ',', ' ') }}-
                            @endif
                            {{ number_format($annonce['budget_max'], 0, ',', ' ') }}€
                        </p>
                        <p class="annonce-description">{{ $annonce['description'] }}</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 {{ $annonce['date'] }}</span>
                            <span class="annonce-location">📍 {{ $annonce['zone_geographique'] }}</span>
                        </div>
                        <button class="btn-contact recherche-btn" onclick="alert('Contact : {{ $annonce['prenom'] ?? '' }} {{ $annonce['nom'] ?? '' }}\nEmail : {{ $annonce['email'] ?? '' }}{{ isset($annonce['telephone']) && ($annonce['afficher_telephone'] ?? false) ? '\nTél : ' . $annonce['telephone'] : '' }}')">
                            Proposer un instrument
                        </button>
                    </div>
                </div>
                @empty
                <div class="no-annonces">
                    <p>Aucune demande pour le moment. Soyez le premier à publier !</p>
                </div>
                @endforelse

            </div>
        </section>

    </div>
@endsection
