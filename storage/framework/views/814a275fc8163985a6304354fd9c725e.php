

<?php $__env->startSection('title', 'Devenir bénévole - APEEAC'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <h1>S'impliquer à l'APEEAC</h1>
    <p>Rejoignez notre équipe de bénévoles</p>
</section>

<div class="container">
    <section class="content-box intro-section">
        <h2>Comment s'impliquer ?</h2>
        <p><b>En tant qu’adhérent bénévole</b><br>
Tout au long de l’année, l’APEEAC a l’occasion de faire vivre aux familles du conservatoire des
moments conviviaux et festifs.
Pour une occasion ou pour plusieurs, venez prendre part à ces moments partagés autour du
théâtre, de la musique et des enfants, petits et grands.
<br><b>En tant qu’adhérent actif</b><br>
Vous avez envie de faire PLUS ?
Vous pouvez prendre part à la vie de l’association et défendre ses valeurs : vous impliquer dans le
conseil d’administration pour débattre et soutenir des projets qui visent à veiller au bien-être des
élèves.
Vous pouvez vous impliquer encore plus dans la vie de l’APEEAC en intégrant son bureau.</p>
        
       

    

    <section class="content-box cta-section">
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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/pages/benevole.blade.php ENDPATH**/ ?>