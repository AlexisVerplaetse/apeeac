<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h3>APEEAC</h3>
            <ul>
                <li><a href="{{ route('apeeac') }}#qui-sommes-nous">Qui sommes-nous ?</a></li>
                <li><a href="{{ route('apeeac') }}#adherer">Adhérer</a></li>
                <li><a href="{{ route('apeeac') }}#contacter">Nous contacter</a></li>
                <li><a href="{{ route('apeeac') }}#benevole">Devenir bénévole</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Services</h3>
            <ul>
                <li><a href="{{ route('assurance') }}">Assurance instrument</a></li>
                <li><a href="{{ route('petites-annonces') }}">Petites annonces</a></li>
                <li><a href="{{ route('vulgarisation') }}">Ressources pédagogiques</a></li>
                <li><a href="{{ route('trucs-astuces') }}">Trucs et astuces</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Conservatoire</h3>
            <ul>
                <li><a href="{{ route('conservatoire') }}#infos-pratiques">Informations pratiques</a></li>
                <li><a href="{{ route('conservatoire') }}#cursus">Les cursus</a></li>
                <li><a href="{{ route('pepites-musicales') }}">Pépites musicales</a></li>
                <li><a href="{{ route('conservatoire') }}#lien-site">Site du conservatoire</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Email : apeeacvalenciennes@gmail.com</p>
            <p>Adresse : 8 Rue Ferrand, <br> 59300 Valenciennes</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} APEEAC - Association des Parents d'Élèves du Conservatoire. Tous droits réservés.</p>
    </div>
</footer>