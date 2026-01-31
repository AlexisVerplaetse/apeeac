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
            <h2 class="section-title">Annonces de vente ({{ count($annonces) }})</h2>
            
            @if(session('success'))
                <div class="alert-success">
                    ✓ {{ session('success') }}
                </div>
            @endif
            
            <div class="annonces-grid">
                
                @forelse($annonces as $annonce)
                <!-- Annonce -->
                <div class="annonce-card">
                    <div class="annonce-image">{{ $annonce['emoji'] }}</div>
                    <div class="annonce-content">
                        <h3>{{ $annonce['titre'] }}</h3>
                        <p class="annonce-price">
                            {{ number_format($annonce['prix'], 0, ',', ' ') }}€
                            @if($annonce['negociable'] ?? false)
                                <span class="badge-negociable">Négociable</span>
                            @endif
                        </p>
                        <p class="annonce-description">{{ $annonce['description'] }}</p>
                        <div class="annonce-meta">
                            <span class="annonce-date">📅 {{ $annonce['date'] }}</span>
                            <span class="annonce-location">📍 {{ $annonce['localisation'] }}</span>
                        </div>
                        <button class="btn-contact" onclick="alert('Contact : {{ $annonce['prenom'] }} {{ $annonce['nom'] }}\nEmail : {{ $annonce['email'] }}{{ isset($annonce['telephone']) && ($annonce['afficher_telephone'] ?? false) ? '\nTél : ' . $annonce['telephone'] : '' }}')">
                            Contacter le vendeur
                        </button>
                    </div>
                </div>
                @empty
                <div class="no-annonces">
                    <p>Aucune annonce pour le moment. Soyez le premier à publier !</p>
                </div>
                @endforelse

            </div>
        </section>

    </div>
@endsection
