@extends('layouts.app') <!-- On utilise le layout -->

@section('title', 'Accueil') <!-- Titre spécifique -->

@section('content') <!-- Contenu spécifique -->



    <!-- Hero Section -->
    <section class="hero">
        <h1>Association des Parents d'Élèves du Conservatoire</h1>
        <p>Accompagner et soutenir la vie musicale au sein de notre conservatoire</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Actualités Section -->
        <section id="actualites">
            <h2 class="section-title">Actualités</h2>
            
            <div class="articles-grid">
                <article class="article-card">
                    <div class="article-image">🎵</div>
                    <div class="article-content">
                        <div class="article-date">10 janvier 2026</div>
                        <h3 class="article-title">Concert de printemps 2026</h3>
                        <p class="article-excerpt">Les inscriptions pour le concert de printemps sont ouvertes ! Une belle opportunité pour nos élèves de se produire sur scène.</p>
                        <a href="#" class="read-more">Lire la suite →</a>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">🎼</div>
                    <div class="article-content">
                        <div class="article-date">8 janvier 2026</div>
                        <h3 class="article-title">Assemblée Générale - Inscription</h3>
                        <p class="article-excerpt">L'assemblée générale annuelle de l'APEEAC aura lieu le 25 janvier. Venez nombreux pour échanger sur les projets de l'année.</p>
                        <a href="#" class="read-more">Lire la suite →</a>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">🎹</div>
                    <div class="article-content">
                        <div class="article-date">5 janvier 2026</div>
                        <h3 class="article-title">Nouvelle session de masterclass</h3>
                        <p class="article-excerpt">Des masterclasses exceptionnelles avec des professionnels reconnus seront organisées tout au long du mois de février.</p>
                        <a href="#" class="read-more">Lire la suite →</a>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">🎺</div>
                    <div class="article-content">
                        <div class="article-date">2 janvier 2026</div>
                        <h3 class="article-title">Bonne année musicale 2026</h3>
                        <p class="article-excerpt">Toute l'équipe de l'APEEAC vous souhaite une excellente année 2026, remplie de belles découvertes musicales et de progrès.</p>
                        <a href="#" class="read-more">Lire la suite →</a>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">🎻</div>
                    <div class="article-content">
                        <div class="article-date">28 décembre 2025</div>
                        <h3 class="article-title">Retour sur le concert de Noël</h3>
                        <p class="article-excerpt">Le concert de Noël a été un véritable succès ! Merci à tous les élèves, professeurs et parents qui ont contribué à cette belle soirée.</p>
                        <a href="#" class="read-more">Lire la suite →</a>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">🎸</div>
                    <div class="article-content">
                        <div class="article-date">20 décembre 2025</div>
                        <h3 class="article-title">Nouvelle offre d'assurance instruments</h3>
                        <p class="article-excerpt">Découvrez notre partenariat avec Verspieren pour assurer vos instruments de musique dans les meilleures conditions.</p>
                        <a href="#" class="read-more">Lire la suite →</a>
                    </div>
                </article>
            </div>
        </section>

    </div>
    
@endsection