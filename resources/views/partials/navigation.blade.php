<header>
    <nav>
    <div class="nav-container">
        <div class="nav-header">
            <a href="{{ route('accueil') }}" class="logo">APEEAC</a>
        </div>
        <ul class="nav-menu">
            <li><a href="{{ route('accueil') }}" class="{{ Request::routeIs('accueil') || Request::routeIs('home') ? 'active' : '' }}">Accueil</a></li>
            <li><a href="{{ route('actualites') }}" class="{{ Request::routeIs('actualites') ? 'active' : '' }}">Actualités</a></li>
            
            <li>
    <a href="{{ route('apeeac') }}" class="{{ Request::routeIs('apeeac') ? 'active' : '' }}">APEEAC</a>
    <div class="dropdown-content">
        <a href="{{ route('apeeac') }}#qui-sommes-nous">Qui sommes-nous ?</a>
        <a href="{{ route('apeeac') }}#adherer">Adhérer</a>
        <a href="{{ route('apeeac') }}#contacter">Contacter</a>
        <a href="{{ route('apeeac') }}#benevole">Bénévole : S'impliquer</a>
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
            
            <li><a href="{{ route('pepites-musicales') }}" class="{{ Request::routeIs('pepites-musicales') ? 'active' : '' }}">Pépites Musicales</a></li>
            
            <li>
                <a href="{{ route('petites-annonces') }}" class="{{ Request::routeIs('petites-annonces') ? 'active' : '' }}">Petites annonces</a>
                <div class="dropdown-content">
                    <a href="{{ route('petites-annonces') }}#covoiturage">Covoiturage</a>
                    <a href="{{ route('petites-annonces') }}#vente">Vente d'instrument</a>
                    <a href="{{ route('petites-annonces') }}#recherche">Recherche de musiciens</a>
                </div>
            </li>
            
            <li><a href="{{ route('vulgarisation') }}" class="{{ Request::routeIs('vulgarisation') ? 'active' : '' }}">Vulgarisation</a></li>
            <li><a href="{{ route('trucs-astuces') }}" class="{{ Request::routeIs('trucs-astuces') ? 'active' : '' }}">Trucs et astuces</a></li>
            
            <li>
                <a href="{{ route('administratif') }}" class="{{ Request::routeIs('administratif') ? 'active' : '' }}">Administratif</a>
                <div class="dropdown-content">
                    <a href="{{ route('administratif') }}#comptes-rendus">Comptes-rendus</a>
                    <a href="{{ route('administratif') }}#pv">Procès-verbaux</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
</header>