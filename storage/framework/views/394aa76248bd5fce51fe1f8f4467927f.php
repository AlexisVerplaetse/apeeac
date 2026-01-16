

<?php $__env->startSection('title', 'Adhérer - APEEAC'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <h1>Adhérer à l'APEEAC</h1>
    <p>Soutenez nos actions et bénéficiez de nombreux avantages</p>
</section>

<div class="container">
    <section class="content-box">
        <h2>Pourquoi adhérer ?</h2>
        <p>En devenant membre de l'APEEAC, vous rejoignez une communauté de parents engagés pour la vie du conservatoire. Votre adhésion nous permet de continuer nos actions et de représenter au mieux les familles.</p>
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

    <section class="content-box highlight-box">
        <h2>Cotisation annuelle</h2>
        <p class="price"><strong>20€</strong> par famille</p>
        <p>Valable du 1er septembre au 31 août de l'année suivante</p>
        <p><em>Tarif réduit de 10€ pour les familles en difficulté (sur justificatif)</em></p>
    </section>

    <section class="content-box">
        <h2>Comment adhérer ?</h2>
        
        <h3>1. Téléchargez le bulletin d'adhésion</h3>
        <a href="#" class="btn" download>📄 Télécharger le bulletin d'adhésion</a>
        
        <h3>2. Remplissez le formulaire</h3>
        <p>Complétez toutes les informations demandées et n'oubliez pas de le signer.</p>
        
        <h3>3. Effectuez le règlement</h3>
        <p>Par chèque à l'ordre de "APEEAC" ou en espèces lors d'une permanence.</p>
        
        <h3>4. Retournez le bulletin</h3>
        <ul>
            <li><strong>Par courrier :</strong> APEEAC, Conservatoire Municipal, 123 rue de la Musique, 75000 Paris</li>
            <li><strong>En main propre :</strong> Lors de nos permanences du mercredi (17h-19h) à l'accueil du conservatoire</li>
            <li><strong>Par email :</strong> adhesions@apeeac.fr (formulaire scanné + virement bancaire)</li>
        </ul>
    </section>

    <section class="content-box">
        <h2>Coordonnées bancaires</h2>
        <p>Pour un virement bancaire :</p>
        <p>
            <strong>IBAN :</strong> FR76 XXXX XXXX XXXX XXXX XXXX XXX<br>
            <strong>BIC :</strong> XXXXXXXX<br>
            <strong>Titulaire :</strong> APEEAC<br>
            <em>Merci de préciser "Adhésion + Nom de famille" en libellé</em>
        </p>
    </section>

    <section class="content-box">
        <h2>Reçu fiscal</h2>
        <p>L'APEEAC étant une association loi 1901 reconnue d'intérêt général, votre cotisation est déductible fiscalement à hauteur de 66% de son montant.</p>
        <p>Un reçu fiscal vous sera automatiquement envoyé en début d'année pour votre déclaration d'impôts.</p>
    </section>

    <section class="content-box cta-section">
        <h2>Des questions ?</h2>
        <p>N'hésitez pas à nous contacter pour toute information complémentaire</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn">Nous contacter</a>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/pages/adherer.blade.php ENDPATH**/ ?>