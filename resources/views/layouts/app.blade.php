<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - APEEAC</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('extra-css')
</head>
<body>

    <!-- Navigation -->
    @include('partials.navigation')

    <!-- Contenu principal -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

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
