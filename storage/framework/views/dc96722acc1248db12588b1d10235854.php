<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Association des Parents d'Élèves du Conservatoire</h1>
        <p>Accompagner et soutenir la vie musicale au sein de notre conservatoire</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Navigation rapide -->
        <!-- Navigation rapide latérale -->
    <aside class="sidebar-nav">
        <h3 class="sidebar-title">Navigation</h3>
        <nav class="sidebar-menu">
            <a href="#qui-sommes-nous" class="sidebar-link">
                <span class="sidebar-icon">👥</span>
                <span class="sidebar-text">Qui sommes-nous ?</span>
            </a>
            <a href="#adherer" class="sidebar-link">
                <span class="sidebar-icon">✨</span>
                <span class="sidebar-text">Adhérer</span>
            </a>
            <a href="#benevole" class="sidebar-link">
                <span class="sidebar-icon">🤝</span>
                <span class="sidebar-text">Devenir bénévole</span>
            </a>
            <a href="#contact" class="sidebar-link">
                <span class="sidebar-icon">💬</span>
                <span class="sidebar-text">Contact</span>
            </a>
            <a href="#administratif" class="sidebar-link">
                <span class="sidebar-icon">📋</span>
                <span class="sidebar-text">Espace administratif</span>
            </a>
            <a href="#stats" class="sidebar-link">
                <span class="sidebar-icon">📊</span>
                <span class="sidebar-text">Chiffres clés</span>
            </a>
        </nav>
    </aside>

        <div class="main-content">
        <!-- Qui sommes-nous Section -->
        <section id="qui-sommes-nous" class="info-section">
            <h2 class="section-title">Qui sommes-nous ?</h2>
            <div class="info-content">
                <p>L'APEEAC est une association loi 1901 créée en 2005 qui regroupe les parents d'élèves du conservatoire municipal. Notre objectif est de créer du lien entre les familles, les élèves et l'équipe pédagogique.</p>
                
                <div class="missions-list">
                    <div class="mission-item">
                        <span class="mission-icon">🎯</span>
                        <span>Représenter les familles auprès de la direction</span>
                    </div>
                    <div class="mission-item">
                        <span class="mission-icon">🎪</span>
                        <span>Organiser des événements musicaux et culturels</span>
                    </div>
                    <div class="mission-item">
                        <span class="mission-icon">💬</span>
                        <span>Faciliter la communication entre tous les acteurs</span>
                    </div>
                    <div class="mission-item">
                        <span class="mission-icon">🎓</span>
                        <span>Soutenir les projets pédagogiques</span>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="<?php echo e(route('qui-sommes-nous')); ?>" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </section>

        <!-- Adhérer Section -->
        <section id="adherer" class="info-section highlight-section">
            <h2 class="section-title">Adhérer à l'APEEAC</h2>
            <div class="info-content">
                <p>En devenant membre de l'APEEAC, vous soutenez nos actions et bénéficiez de nombreux avantages :</p>
                
                <div class="advantages-grid-mini">
                    <div class="advantage-mini">
                        <span class="advantage-icon">🎵</span>
                        <span>Assurance instrument</span>
                    </div>
                    <div class="advantage-mini">
                        <span class="advantage-icon">🎫</span>
                        <span>Accès prioritaire aux événements</span>
                    </div>
                    <div class="advantage-mini">
                        <span class="advantage-icon">🗳️</span>
                        <span>Droit de vote aux AG</span>
                    </div>
                    <div class="advantage-mini">
                        <span class="advantage-icon">📧</span>
                        <span>Newsletter mensuelle</span>
                    </div>
                </div>

                <div class="price-box">
                    <p class="price"><strong>20€</strong> par famille / an</p>
                </div>

                <div class="cta-buttons">
                    <a href="<?php echo e(route('adherer')); ?>" class="btn btn-primary">Adhérer maintenant</a>
                    <a href="#" class="btn btn-secondary" download>📄 Bulletin d'adhésion</a>
                </div>
            </div>
        </section>

        <!-- Devenir bénévole Section -->
        <section id="benevole" class="info-section">
            <h2 class="section-title">S'impliquer comme bénévole</h2>
            <div class="info-content">
                <p>L'APEEAC fonctionne grâce à l'engagement de parents bénévoles. Rejoignez notre équipe !</p>
                
                <div class="poles-mini-grid">
                    <div class="pole-mini">
                        <div class="pole-mini-icon">🎪</div>
                        <h4>Organisation d'événements</h4>
                        <p>Concerts, spectacles, fêtes</p>
                    </div>
                    <div class="pole-mini">
                        <div class="pole-mini-icon">📱</div>
                        <h4>Communication</h4>
                        <p>Réseaux sociaux, newsletter</p>
                    </div>
                    <div class="pole-mini">
                        <div class="pole-mini-icon">📋</div>
                        <h4>Administratif</h4>
                        <p>Gestion, comptabilité</p>
                    </div>
                    <div class="pole-mini">
                        <div class="pole-mini-icon">🗣️</div>
                        <h4>Représentation</h4>
                        <p>Conseils d'administration</p>
                    </div>
                </div>

                <p class="highlight-text">⏰ Même quelques heures par mois peuvent faire la différence !</p>

                <div class="cta-buttons">
                    <a href="<?php echo e(route('benevole')); ?>" class="btn btn-primary">Découvrir les opportunités</a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="info-section">
            <h2 class="section-title">Nous contacter</h2>
            <div class="info-content">
                <div class="contact-mini-grid">
                    <div class="contact-mini-item">
                        <div class="contact-mini-icon">📧</div>
                        <h4>Email</h4>
                        <p><a href="mailto:contact@apeeac.fr">contact@apeeac.fr</a></p>
                    </div>
                    <div class="contact-mini-item">
                        <div class="contact-mini-icon">📞</div>
                        <h4>Téléphone</h4>
                        <p><a href="tel:0123456789">01 23 45 67 89</a></p>
                    </div>
                    <div class="contact-mini-item">
                        <div class="contact-mini-icon">📍</div>
                        <h4>Adresse</h4>
                        <p>Conservatoire Municipal<br>123 rue de la Musique<br>75000 Paris</p>
                    </div>
                    <div class="contact-mini-item">
                        <div class="contact-mini-icon">🕐</div>
                        <h4>Permanences</h4>
                        <p>Mercredis 17h-19h<br>À l'accueil du conservatoire</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="<?php echo e(route('contact')); ?>" class="btn btn-primary">Formulaire de contact</a>
                </div>
            </div>
        </section>
<!-- Section Administratif -->
        <section id="administratif" class="info-section admin-access-section">
            <h2 class="section-title">Espace Administratif</h2>
            <div class="info-content">
                <div class="admin-access-content">
                    <div class="admin-icon-large">📋</div>
                    <p>Accédez aux comptes-rendus, procès-verbaux et documents officiels de l'association.</p>
                    <div class="admin-features">
                        <div class="admin-feature">
                            <span class="feature-icon">📝</span>
                            <span>Comptes-rendus des réunions</span>
                        </div>
                        <div class="admin-feature">
                            <span class="feature-icon">📋</span>
                            <span>Procès-verbaux d'assemblées générales</span>
                        </div>
                        <div class="admin-feature">
                            <span class="feature-icon">📜</span>
                            <span>Documents officiels et statuts</span>
                        </div>
                        <div class="admin-feature">
                            <span class="feature-icon">💰</span>
                            <span>Bilans financiers</span>
                        </div>
                    </div>
                    <div class="cta-buttons">
                        <a href="<?php echo e(route('administratif')); ?>" class="btn btn-admin">
                            <span>📂</span> Accéder à l'espace administratif
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Statistiques Section -->
        <section class="stats-section">
            <h2 class="section-title">L'APEEAC en chiffres</h2>
            <div class="stats-grid">
                <div class="stat-box">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Familles adhérentes</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">22</div>
                    <div class="stat-label">Bénévoles actifs</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">15</div>
                    <div class="stat-label">Événements / an</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">19</div>
                    <div class="stat-label">Années d'existence</div>
                </div>
            </div>
        </section>

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
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac-main (2)\apeeac-main\resources\views/pages/apeeac/apeeac.blade.php ENDPATH**/ ?>