<?php $__env->startSection('title', 'Devenir bénévole - APEEAC'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <h1>S'impliquer à l'APEEAC</h1>
    <p>Rejoignez notre équipe de bénévoles</p>
</section>

<div class="container">
    
    <!-- Navigation rapide latérale -->
    <aside class="sidebar-nav">
        <h3 class="sidebar-title">Navigation</h3>
        <nav class="sidebar-menu">
            <a href="#comment-simpliquer" class="sidebar-link">
                <span class="sidebar-icon">🤝</span>
                <span class="sidebar-text">Comment s'impliquer ?</span>
            </a>
            <a href="#benevole" class="sidebar-link">
                <span class="sidebar-icon">✨</span>
                <span class="sidebar-text">Adhérent bénévole</span>
            </a>
            <a href="#actif" class="sidebar-link">
                <span class="sidebar-icon">🚀</span>
                <span class="sidebar-text">Adhérent actif</span>
            </a>
            <a href="#rejoindre" class="sidebar-link">
                <span class="sidebar-icon">📞</span>
                <span class="sidebar-text">Nous rejoindre</span>
            </a>
        </nav>
    </aside>

    <!-- Contenu principal -->
    <div class="main-content">

    <section id="comment-simpliquer" class="content-box intro-section">
        <h2>Comment s'impliquer ?</h2>
        <p>L'APEEAC vous offre plusieurs façons de vous impliquer selon vos disponibilités et vos envies. Que vous souhaitiez participer ponctuellement ou vous engager plus activement, il y a une place pour vous !</p>
    </section>

    <section id="benevole" class="content-box">
        <h2>En tant qu'adhérent bénévole</h2>
        <p>Tout au long de l'année, l'APEEAC a l'occasion de faire vivre aux familles du conservatoire des moments conviviaux et festifs.</p>
        
        <p>Pour une occasion ou pour plusieurs, venez prendre part à ces moments partagés autour du théâtre, de la musique et des enfants, petits et grands.</p>
        
        <div class="highlight-box">
            <h3>🎉 Exemples d'actions ponctuelles</h3>
            <ul>
                <li>Aide à l'organisation de concerts et spectacles</li>
                <li>Participation aux événements festifs (fêtes de fin d'année, portes ouvertes)</li>
                <li>Tenue de stands lors des manifestations</li>
                <li>Accompagnement lors des sorties culturelles</li>
                <li>Aide logistique pour les événements</li>
            </ul>
        </div>
    </section>

    <section id="actif" class="content-box">
        <h2>En tant qu'adhérent actif</h2>
        <p><strong>Vous avez envie de faire PLUS ?</strong></p>
        
        <p>Vous pouvez prendre part à la vie de l'association et défendre ses valeurs : vous impliquer dans le conseil d'administration pour débattre et soutenir des projets qui visent à veiller au bien-être des élèves.</p>
        
        <p>Vous pouvez vous impliquer encore plus dans la vie de l'APEEAC en intégrant son bureau.</p>
        
        <div class="engagement-grid">
            <div class="engagement-card">
                <div class="engagement-icon">📋</div>
                <h3>Conseil d'administration</h3>
                <p>Participez aux décisions stratégiques de l'association, débattez des projets et votez les orientations importantes.</p>
                <p class="engagement-time">⏱️ Quelques réunions par an</p>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">👔</div>
                <h3>Bureau de l'association</h3>
                <p>Prenez part à la gestion quotidienne de l'APEEAC en occupant un poste au sein du bureau (président, trésorier, secrétaire, etc.).</p>
                <p class="engagement-time">⏱️ Engagement régulier</p>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">🎯</div>
                <h3>Responsable de pôle</h3>
                <p>Coordonnez un domaine d'activité spécifique : communication, événements, représentation, services aux adhérents.</p>
                <p class="engagement-time">⏱️ Selon le pôle</p>
            </div>
        </div>

        <div class="info-box">
            <h3>💡 Ce que vous y gagnerez</h3>
            <ul>
                <li>Développer de nouvelles compétences</li>
                <li>Rencontrer des personnes engagées et passionnées</li>
                <li>Avoir un impact concret sur la vie du conservatoire</li>
                <li>Contribuer au bien-être des élèves et des familles</li>
                <li>Vivre une expérience associative enrichissante</li>
            </ul>
        </div>
    </section>

    <section id="rejoindre" class="content-box cta-section">
        <h2>Prêt(e) à nous rejoindre ?</h2>
        <p>N'hésitez pas à nous contacter pour en savoir plus ou pour manifester votre intérêt. Nous serons ravis d'échanger avec vous !</p>
        
        <div class="cta-buttons">
            <a href="<?php echo e(route('contact')); ?>" class="btn btn-primary">Je veux m'impliquer</a>
            <a href="mailto:contact@apeeac.fr" class="btn btn-secondary">Poser une question</a>
        </div>

        <p class="testimonial">
            <em>"Devenir bénévole à l'APEEAC a été une expérience enrichissante. J'ai rencontré des personnes formidables et je me sens vraiment utile !"</em><br>
            — Sophie, bénévole depuis 3 ans
        </p>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac-main (2)\apeeac-main\resources\views/pages/apeeac/benevole.blade.php ENDPATH**/ ?>