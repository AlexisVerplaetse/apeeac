@extends('layouts.app')

@section('title', 'Adhérer - APEEAC')

@section('content')
<section class="hero">
    <h1>Adhérer à l'APEEAC</h1>
    <p>Soutenez nos actions et bénéficiez de nombreux avantages</p>
</section>

<div class="container">
    
    <!-- Navigation rapide latérale -->
    <aside class="sidebar-nav">
        <h3 class="sidebar-title">Navigation</h3>
        <nav class="sidebar-menu">
            <a href="#pourquoi-adherer" class="sidebar-link">
                <span class="sidebar-icon">❓</span>
                <span class="sidebar-text">Pourquoi adhérer ?</span>
            </a>
            <a href="#avantages" class="sidebar-link">
                <span class="sidebar-icon">⭐</span>
                <span class="sidebar-text">Les avantages</span>
            </a>
            <a href="#rejoindre" class="sidebar-link">
                <span class="sidebar-icon">✍️</span>
                <span class="sidebar-text">Rejoignez-nous</span>
            </a>
            <a href="#questions" class="sidebar-link">
                <span class="sidebar-icon">💬</span>
                <span class="sidebar-text">Des questions ?</span>
            </a>
        </nav>
    </aside>

    <!-- Contenu principal -->
    <div class="main-content">

    <section id="pourquoi-adherer" class="content-box">
        <h2>Pourquoi adhérer ?</h2>
        <p>Pour participer et porter la parole des parents et élèves du Conservatoire au sein du Conseil
d'Établissement, et appuyer les évolutions nécessaires grâce au dialogue permanent avec la
Direction du Conservatoire</p>
        
        <p>Pour être accompagné tout au long de la scolarité de votre enfant : être informé sur les activités
et sur la vie de l'établissement, être conseillé en cas de besoin, être assuré de trouver les bonnes
informations au bon moment.</p>
        
        <p>Pour bénéficier d'une assurance pour les instruments au tarif FNAPEC</p>
        
        <p>Pour soutenir les initiatives d'élèves dans toutes les disciplines</p>
        
        <p>Pour obtenir à prix réduits des manuels de FM et des cahiers de musique lors de la rentrée, ou
des partitions d'examens de fin de cycle</p>
    </section>

    <section id="avantages" class="content-box">
        <h2>Les avantages adhérents</h2>
        <div class="advantages-grid">
            <div class="advantage-item">
                <h3>🎵 Assurance instrument</h3>
                <p>Tarifs préférentiels négociés pour l'assurance de vos instruments de musique</p>
            </div>

            <div class="advantage-item">
                <h3>🎫 Événements</h3>
                <p>Accès prioritaire aux concerts, spectacles et événements organisés par l'association</p>
            </div>

            <div class="advantage-item">
                <h3>🗳️ Participation</h3>
                <p>Droit de vote aux assemblées générales et participation aux décisions de l'association</p>
            </div>

            <div class="advantage-item">
                <h3>🚗 Services pratiques</h3>
                <p>Accès aux petites annonces (vente/achat d'instruments) et au réseau de covoiturage</p>
            </div>

            <div class="advantage-item">
                <h3>📧 Information</h3>
                <p>Newsletter mensuelle avec toutes les actualités du conservatoire et de l'association</p>
            </div>

            <div class="advantage-item">
                <h3>🤝 Réseau</h3>
                <p>Rencontres et échanges avec d'autres familles partageant la même passion</p>
            </div>
        </div>
    </section>

    <section id="rejoindre" class="content-box">
        <h2>Rejoignez-nous</h2>
        
        <div class="price-highlight">
            <p class="price-text">L'adhésion est de <strong>10 €</strong> par année scolaire et par famille.</p>
        </div>
        
        <p>Vous pouvez adhérer en ligne en cliquant sur le lien suivant :</p>
        <div class="cta-box">
            <a href="https://www.helloasso.com/associations/association-des-parents-d-eleves-des-etudiants-et-amis-du-conservatoire" class="btn btn-primary" download>📝 ADHÉSION APEEAC 25/26</a>
        </div>
        
        <p>Vous pouvez aussi adhérer en téléchargeant, imprimant et remplissant le bulletin d'adhésion « papier » :</p>
        <div class="cta-box">
            <a href="#" class="btn btn-secondary" download>📄 PLAQUETTE APEEAC</a>
        </div>
    </section>

    <section id="questions" class="content-box cta-section">
        <h2>Des questions ?</h2>
        <p>N'hésitez pas à nous contacter pour toute information complémentaire</p>
        <a href="{{ route('contact') }}" class="btn">Nous contacter</a>
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