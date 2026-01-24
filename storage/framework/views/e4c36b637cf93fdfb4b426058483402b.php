

<?php $__env->startSection('title', 'Petites Annonces - APEEAC'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Petites Annonces</h1>
        <p>Vente, recherche d'instruments et covoiturage entre membres</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Introduction -->
        <section class="intro-section">
            <p class="intro-text">
                Bienvenue sur l'espace petites annonces de l'APEEAC ! Réservé aux adhérents, cet espace vous permet d'acheter ou vendre des instruments, de trouver des accessoires musicaux ou de partager vos trajets vers le conservatoire.
            </p>
        </section>

        <!-- Catégories de petites annonces -->
        <section class="categories-section">
            <h2 class="section-title">Choisissez une catégorie</h2>
            
            <div class="categories-grid">
                
                <!-- Bulle "Je vends" -->
                <a href="<?php echo e(route('petites-annonces.vente')); ?>" class="category-bubble vente-bubble">
                    <div class="bubble-icon">💰</div>
                    <h3>Je vends</h3>
                    <p>Instruments, partitions, accessoires</p>
                    <div class="bubble-stats">
                        <span class="stat-badge">12 annonces</span>
                    </div>
                    <div class="bubble-arrow">→</div>
                </a>

                <!-- Bulle "Je recherche" -->
                <a href="<?php echo e(route('petites-annonces.recherche')); ?>" class="category-bubble recherche-bubble">
                    <div class="bubble-icon">🔍</div>
                    <h3>Je recherche</h3>
                    <p>Trouvez l'instrument de vos rêves</p>
                    <div class="bubble-stats">
                        <span class="stat-badge">8 demandes</span>
                    </div>
                    <div class="bubble-arrow">→</div>
                </a>

                <!-- Bulle "Covoiturage" -->
                <a href="<?php echo e(route('petites-annonces.covoiturage')); ?>" class="category-bubble covoiturage-bubble">
                    <div class="bubble-icon">🚗</div>
                    <h3>Covoiturage</h3>
                    <p>Partagez vos trajets</p>
                    <div class="bubble-stats">
                        <span class="stat-badge">5 propositions</span>
                    </div>
                    <div class="bubble-arrow">→</div>
                </a>

            </div>
        </section>

        <!-- Informations pratiques -->
        <section class="info-box">
            <h2 class="section-title">ℹ️ Informations pratiques</h2>
            
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-icon">👥</div>
                    <h3>Réservé aux adhérents</h3>
                    <p>Les petites annonces sont accessibles uniquement aux membres à jour de leur cotisation.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">📝</div>
                    <h3>Déposer une annonce</h3>
                    <p>Vous pouvez déposer gratuitement vos annonces en vous connectant à votre espace membre.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">⚠️</div>
                    <h3>Règles de bonne conduite</h3>
                    <p>L'APEEAC n'est pas responsable des transactions. Soyez prudents et respectueux.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">📧</div>
                    <h3>Contact vendeur</h3>
                    <p>Les coordonnées des annonceurs sont visibles uniquement pour les adhérents connectés.</p>
                </div>
            </div>
        </section>

        <!-- Call to action pour les non-adhérents -->
        <section class="cta-section">
            <div class="cta-content">
                <h2>Pas encore adhérent ?</h2>
                <p>Rejoignez l'APEEAC pour accéder aux petites annonces et profiter de tous nos services !</p>
                <div class="cta-buttons">
                    <a href="<?php echo e(route('adherer')); ?>" class="btn btn-primary">Adhérer maintenant</a>
                    <a href="<?php echo e(route('contact')); ?>" class="btn btn-secondary">Nous contacter</a>
                </div>
            </div>
        </section>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/pages/petites-annonces.blade.php ENDPATH**/ ?>