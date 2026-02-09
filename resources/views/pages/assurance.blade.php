@extends('layouts.app')

@section('title', 'Assurer son instrument')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <h1>Assurer son instrument</h1>
    <p>Protection et sécurité pour votre instrument de musique</p>
</section>

<div class="container">
    
    <!-- Navigation rapide latérale -->
    <aside class="sidebar-nav">
        <h3 class="sidebar-title">Navigation</h3>
        <nav class="sidebar-menu">
            <a href="#introduction" class="sidebar-link">
                <span class="sidebar-icon">🎵</span>
                <span class="sidebar-text">Introduction</span>
            </a>
            <a href="#pourquoi-assurer" class="sidebar-link">
                <span class="sidebar-icon">❓</span>
                <span class="sidebar-text">Pourquoi assurer ?</span>
            </a>
            <a href="#plusieurs-instruments" class="sidebar-link">
                <span class="sidebar-icon">🎼</span>
                <span class="sidebar-text">Plusieurs instruments</span>
            </a>
            <a href="#comment-souscrire" class="sidebar-link">
                <span class="sidebar-icon">✍️</span>
                <span class="sidebar-text">Comment souscrire ?</span>
            </a>
        </nav>
    </aside>

    <!-- Contenu principal -->
    <div class="main-content">

        <!-- Introduction -->
        <section id="introduction" class="content-box">
            <h2 class="section-title-red">Onglet Assurer son instrument</h2>
            
            <p class="intro-text">
                Grâce à la FNAPEC, notre Fédération Nationale, nous vous proposons d'assurer votre instrument de musique avec l'assurance Verspieren musique, spécialiste de l'assurance instruments de musique depuis plus de 30 ans.
            </p>
            
            <div class="highlight-box">
                <p>
                    <strong>En tant qu'adhérent à l'APEEAC</strong>, vous bénéficiez de conditions avantageuses pour assurer vos instruments et accessoires.
                </p>
            </div>
        </section>

        <!-- Pourquoi assurer un instrument de musique ? -->
        <section id="pourquoi-assurer" class="content-box">
            <h2 class="section-title-red">Pourquoi assurer un instrument de musique ?</h2>
            
            <p><strong>Deux types de situations se présentent :</strong></p>
            
            <div class="situation-card">
                <h3>1. Instrument loué auprès du conservatoire :</h3>
                <p>
                    L'assurance est obligatoire et doit être souscrite avant de retirer l'instrument, puisque l'attestation d'assurance fait partie du dossier à fournir.
                </p>
            </div>

            <div class="situation-card">
                <h3>2. Instrument en propriété ou loué à l'extérieur (luthier, ...) :</h3>
                <p>Les aspects à prendre en compte pour décider de la souscription d'une assurance sont les suivants :</p>
                
                <div class="sub-section">
                    <h4>a. Mobilité de l'instrument :</h4>
                    <p>
                        Si l'instrument est apporté par l'élève à chacun de ses cours, qu'il est régulièrement déposé à la loge, s'il voyage avec la famille pour les vacances, alors l'assurance est recommandée.
                    </p>
                </div>

                <div class="sub-section">
                    <h4>b. Risques couverts par l'assurance habitation :</h4>
                    <p>
                        Bien vérifier sur le contrat de l'assurance habitation ce qui est couvert : l'instrument est-il couvert pour un vol ? Est-il couvert pour des dommages subis que soit le lieu ou seulement au domicile ? Quelle est la valeur maximum couverte ?
                    </p>
                </div>

                <div class="sub-section">
                    <h4>c. Valeur de l'instrument :</h4>
                    <p>
                        À chacun de juger la valeur « plancher » à partir de laquelle il fait sens de se couvrir avec une assurance ; 1000 euros est un exemple typique.
                    </p>
                </div>
            </div>

            <div class="info-box">
                <p>
                    Lorsque vous avez décidé d'assurer votre (vos) instruments(s), comme adhérent de l'APEC vous bénéficiez d'un tarif préférentiel avec la société Assurances Verspieren, qui propose une assurance vraiment adaptée pour la pratique instrumentale en conservatoire.
                </p>
            </div>
        </section>

        <!-- Assurer plusieurs instruments -->
        <section id="plusieurs-instruments" class="content-box">
            <h2 class="section-title-red">Assurer plusieurs instruments :</h2>
            
            <p>
                Une famille possédant plusieurs instruments à assurer a intérêt à souscrire un seul contrat d'assurance regroupant tous les instruments : Le montant de la cotisation sera notablement plus faible que la somme de plusieurs cotisations séparées.
            </p>
        </section>

        <!-- Comment souscrire ? -->
        <section id="comment-souscrire" class="content-box">
            <h2 class="section-title-red">Comment souscrire ?</h2>
            
            <p>
                Pour souscrire cette assurance aux conditions APEEAC, vous pouvez souscrire directement en ligne avec le lien suivant :
            </p>
            
            <div class="cta-box">
                <a href="https://musique.verspieren.com/" target="_blank" class="btn btn-primary btn-large">
                    🔗 VERSPIEREN MUSIQUE
                </a>
            </div>

            <div class="info-note">
                <p>
                    <strong>💡 Conseil :</strong> Munissez-vous de votre numéro d'adhérent APEEAC lors de votre souscription pour bénéficier des tarifs préférentiels.
                </p>
            </div>
        </section>

        <!-- Section Contact -->
        <section class="content-box contact-section">
            <h2>Des questions sur l'assurance ?</h2>
            <p>Notre équipe est là pour vous aider dans vos démarches d'assurance.</p>
            
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn btn-secondary">
                    📧 Nous contacter
                </a>
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