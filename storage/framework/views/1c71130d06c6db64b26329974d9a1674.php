<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - APEEAC</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <?php echo $__env->yieldContent('extra-css'); ?>
</head>
<body>

    <!-- Navigation -->
    <?php echo $__env->make('partials.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Contenu principal -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Bouton retour en haut -->
    <button id="backToTop" aria-label="Retour en haut">↑</button>

    <script>
        const backToTopButton = document.getElementById("backToTop");

        if (backToTopButton) {
            window.addEventListener("scroll", () => {
                backToTopButton.style.display =
                    window.scrollY > 300 ? "flex" : "none";
            });

            backToTopButton.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        }
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>