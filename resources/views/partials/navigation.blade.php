<header>
    <nav>
    <div class="nav-container">
        <div class="nav-header">
            <a href="{{ route('accueil') }}" class="logo">APEEAC</a>
        </div>
        <ul class="nav-menu">
            <li><a href="{{ route('accueil') }}" class="{{ Request::routeIs('accueil') || Request::routeIs('home') ? 'active' : '' }}">Actualités</a></li>
            <li>
    <a href="{{ route('apeeac') }}" class="{{ Request::routeIs('apeeac') ? 'active' : '' }}">APEEAC</a>
    <div class="dropdown-content">
        <a href="{{ route('qui-sommes-nous') }}">Qui sommes-nous ?</a>
        <a href="{{ route('adherer') }}">Adhérer</a>
        <a href="{{ route('contact') }}">Contacter</a>
        <a href="{{ route('benevole') }}">Bénévole : S'impliquer</a>
        <a href="{{ route('administratif') }}">Administratif</a>
    </div>
</li>
            
            <li><a href="{{ route('assurance') }}" class="{{ Request::routeIs('assurance') ? 'active' : '' }}">Assurer son instrument</a></li>
            
            <li>
                <a href="{{ route('conservatoire') }}" class="{{ Request::routeIs('conservatoire') ? 'active' : '' }}">Conservatoire</a>
                <div class="dropdown-content">
                    <a href="{{ route('conservatoire') }}#infos-pratiques">Infos pratiques</a>
                    <a href="{{ route('conservatoire') }}#cursus">Les cursus</a>
                    <a href="{{ route('conservatoire') }}#cycles">Les cycles</a>
                    <a href="{{ route('conservatoire') }}#orchestres">Les orchestres</a>
                    <a href="{{ route('conservatoire') }}#lien-site">Lien vers le site</a>
                </div>
            </li>
            
            
            <li>
                <a href="{{ route('petites-annonces') }}" class="{{ Request::routeIs('petites-annonces') ? 'active' : '' }}">Petites annonces</a>
                <div class="dropdown-content">
                    <a href="{{ route('petites-annonces') }}#covoiturage">Covoiturage</a>
                    <a href="{{ route('petites-annonces') }}#vente">Vente d'instrument</a>
                    <a href="{{ route('petites-annonces') }}#recherche">Recherche de musiciens</a>
                </div>
            </li>
            
        </ul>
    </div>
</nav>
</header>