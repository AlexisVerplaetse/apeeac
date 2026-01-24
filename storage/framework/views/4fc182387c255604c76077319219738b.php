<header>
    <nav>
    <div class="nav-container">
        <div class="nav-header">
            <a href="<?php echo e(route('accueil')); ?>" class="logo">APEEAC</a>
        </div>
        <ul class="nav-menu">
            <li><a href="<?php echo e(route('accueil')); ?>" class="<?php echo e(Request::routeIs('accueil') || Request::routeIs('home') ? 'active' : ''); ?>">Accueil</a></li>
            <li><a href="<?php echo e(route('actualites')); ?>" class="<?php echo e(Request::routeIs('actualites') ? 'active' : ''); ?>">Actualités</a></li>
            
            <li>
    <a href="<?php echo e(route('apeeac')); ?>" class="<?php echo e(Request::routeIs('apeeac') ? 'active' : ''); ?>">APEEAC</a>
    <div class="dropdown-content">
        <a href="<?php echo e(route('qui-sommes-nous')); ?>#qui-sommes-nous">Qui sommes-nous ?</a>
        <a href="<?php echo e(route('adherer')); ?>#adherer">Adhérer</a>
        <a href="<?php echo e(route('contact')); ?>#contacter">Contacter</a>
        <a href="<?php echo e(route('benevole')); ?>#benevole">Bénévole : S'impliquer</a>
        <a href="<?php echo e(route('administratif')); ?>#administratif">Administratif</a>
    </div>
</li>
            
            <li><a href="<?php echo e(route('assurance')); ?>" class="<?php echo e(Request::routeIs('assurance') ? 'active' : ''); ?>">Assurer son instrument</a></li>
            
            <li>
                <a href="<?php echo e(route('conservatoire')); ?>" class="<?php echo e(Request::routeIs('conservatoire') ? 'active' : ''); ?>">Conservatoire</a>
                <div class="dropdown-content">
                    <a href="<?php echo e(route('conservatoire')); ?>#infos-pratiques">Infos pratiques</a>
                    <a href="<?php echo e(route('conservatoire')); ?>#cursus">Les cursus</a>
                    <a href="<?php echo e(route('conservatoire')); ?>#cycles">Les cycles</a>
                    <a href="<?php echo e(route('conservatoire')); ?>#orchestres">Les orchestres</a>
                    <a href="<?php echo e(route('conservatoire')); ?>#lien-site">Lien vers le site</a>
                </div>
            </li>
            
            <li><a href="<?php echo e(route('pepites-musicales')); ?>" class="<?php echo e(Request::routeIs('pepites-musicales') ? 'active' : ''); ?>">Pépites Musicales</a></li>
            
            <li>
                <a href="<?php echo e(route('petites-annonces')); ?>" class="<?php echo e(Request::routeIs('petites-annonces') ? 'active' : ''); ?>">Petites annonces</a>
                <div class="dropdown-content">
                    <a href="<?php echo e(route('petites-annonces')); ?>/covoiturage">Covoiturage</a>
                    <a href="<?php echo e(route('petites-annonces')); ?>/vente">Vente d'instrument</a>
                    <a href="<?php echo e(route('petites-annonces')); ?>/recherche">Recherche de musiciens</a>
                </div>
            </li>
            
            <li><a href="<?php echo e(route('vulgarisation')); ?>" class="<?php echo e(Request::routeIs('vulgarisation') ? 'active' : ''); ?>">Vulgarisation</a></li>
            <li><a href="<?php echo e(route('trucs-astuces')); ?>" class="<?php echo e(Request::routeIs('trucs-astuces') ? 'active' : ''); ?>">Trucs et astuces</a></li>
            
           
        </ul>
    </div>
</nav>
</header><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/partials/navigation.blade.php ENDPATH**/ ?>