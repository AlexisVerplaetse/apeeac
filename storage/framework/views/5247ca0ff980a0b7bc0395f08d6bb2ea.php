

<?php $__env->startSection('title', 'Qui sommes-nous - APEEAC'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <h1>Qui sommes-nous ?</h1>
    <p>Découvrez l'APEEAC et son équipe</p>
</section>

<div class="container">
    <section class="content-box">
        <h2>L'Association</h2>
        <p>L’APEEAC, Association des Parents d’élèves, Etudiants et Amis du Conservatoire de
Valenciennes, est une association dont l’objectif est de :
- faciliter les échanges et l’entraide entre l’administration du Conservatoire et les parents d’élèves,
- créer une dynamique autour des activités culturelles proposées par cette institution.
Grâce à des initiatives et des actions, l’APEEAC valorise les apprentissages des élèves du
Conservatoire ainsi que le travail des professeurs.
Elle siège au conseil d’établissement du Conservatoire, instance de dialogue et de concertation à
caractère consultatif entre les différents acteurs de la vie du Conservatoire, ainsi qu’à la
commission des aides individuelles de la DRAC pour les élèves en cycle d’orientation
professionnelle.
L’APEEAC, par les diverses actions qu’elle instaure, (bourses aux livres, contribution financière à
certains projets...) apporte un soutien aux familles.</p>
        
    </section>

    <section class="content-box">
        <h2>Nos missions</h2>
        <ul>
            <li><strong>Représenter les familles</strong> auprès de la direction du conservatoire et défendre leurs intérêts</li>
            <li><strong>Organiser des événements</strong> musicaux et culturels tout au long de l'année</li>
            <li><strong>Faciliter la communication</strong> entre tous les acteurs du conservatoire</li>
            <li><strong>Soutenir les projets pédagogiques</strong> et les initiatives des enseignants</li>
            <li><strong>Proposer des services</strong> aux adhérents (assurance, covoiturage, petites annonces)</li>
            <li><strong>Promouvoir</strong> les pratiques musicales et culturelles</li>
        </ul>
    </section>

    <section class="content-box">
        <h2>Le bureau</h2>
        <div class="team-member">
            <h3>Jean Dupont - Président</h3>
            <p>Parent d'élève depuis 8 ans, Jean coordonne les actions de l'association et assure la liaison avec la direction du conservatoire.</p>
        </div>

        <div class="team-member">
            <h3>Marie Martin - Vice-Présidente</h3>
            <p>Musicienne amateur et mère de deux élèves, Marie s'occupe notamment de l'organisation des événements culturels.</p>
        </div>

        <div class="team-member">
            <h3>Pierre Durand - Trésorier</h3>
            <p>Responsable de la gestion financière de l'association, Pierre veille au bon usage des cotisations et subventions.</p>
        </div>

        <div class="team-member">
            <h3>Sophie Lefebvre - Secrétaire</h3>
            <p>Sophie gère les adhésions, rédige les comptes-rendus et assure la communication avec les membres.</p>
        </div>
    </section>

    <section class="content-box">
        <h2>Notre histoire</h2>
        <p>Fondée en 2005 par un groupe de parents souhaitant dynamiser la vie du conservatoire, l'APEEAC n'a cessé de grandir et de développer ses actions.</p>
        
        <p>Au fil des années, nous avons organisé des dizaines de concerts, créé des partenariats avec d'autres structures culturelles, et contribué à l'amélioration des conditions d'enseignement au conservatoire.</p>
    </section>

    <section class="content-box cta-section">
        <h2>Rejoignez-nous !</h2>
        <p>Vous partagez nos valeurs et souhaitez vous impliquer dans la vie du conservatoire ?</p>
        <a href="<?php echo e(route('adherer')); ?>" class="btn">Devenir adhérent</a>
        <a href="<?php echo e(route('benevole')); ?>" class="btn btn-secondary">Devenir bénévole</a>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/pages/qui-sommes-nous.blade.php ENDPATH**/ ?>