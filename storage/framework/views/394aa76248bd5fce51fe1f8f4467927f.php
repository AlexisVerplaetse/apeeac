

<?php $__env->startSection('title', 'Adhérer - APEEAC'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <h1>Adhérer à l'APEEAC</h1>
    <p>Soutenez nos actions et bénéficiez de nombreux avantages</p>
</section>

<div class="container">
    <section class="content-box">
        <h2>Pourquoi adhérer ?</h2>
        <p>Pour participer et porter la parole des parents et élèves du Conservatoire au sein du Conseil
d’Établissement, et appuyer les évolutions nécessaires grâce au dialogue permanent avec la
Direction du Conservatoire
Pour être accompagné tout au long de la scolarité de votre enfant : être informé sur les activités
et sur la vie de l’établissement, être conseillé en cas de besoin, être assuré de trouver les bonnes
informations au bon moment.
Pour bénéficier d’une assurance pour les instruments au tarif FNAPEC
Pour soutenir les initiatives d’élèves dans toutes les disciplines
Pour obtenir à prix réduits des manuels de FM et des cahiers de musique lors de la rentrée, ou
des partitions d’examens de fin de cycle</p>
    </section>

    <section class="content-box">
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

    <section class="content-box">
        <h2>Rejoignez-nous</h2>
        
        <P>L’adhésion est de 10 € par année scolaire et par famille.
Vous pouvez adhérer en ligne en cliquant sur le lien suivant</P>
        <a href="#" class="btn" download>ADHÉSION APEEAC 25/26</a>
        
        <P>Vous pouvez aussi adhérer en téléchargeant, imprimant et remplissant (le bulletin d’adhésion
« papier » :</P>
        <a href="#" class="btn" download>PLAQUETTE APEEAC
        </a>
        
        
        
    </section>

    <section class="content-box cta-section">
        <h2>Des questions ?</h2>
        <p>N'hésitez pas à nous contacter pour toute information complémentaire</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn">Nous contacter</a>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/pages/adherer.blade.php ENDPATH**/ ?>