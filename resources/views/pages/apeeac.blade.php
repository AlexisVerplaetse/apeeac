@extends('layouts.app')

@section('title', 'APEEAC - L\'Association')

@section('content')
<section class="hero">
    <h1>L'APEEAC</h1>
    <p>Association des Parents d'Élèves et d'Enseignants des Arts et Cultures</p>
</section>

<div class="container">
    <section id="qui-sommes-nous" class="content-box">
        <h2>Qui sommes-nous ?</h2>
        <p>L'APEEAC est une association loi 1901 créée en 2005 qui regroupe les parents d'élèves du conservatoire municipal. Notre objectif est de créer du lien entre les familles, les élèves et l'équipe pédagogique.</p>
        
        <h3>Nos missions</h3>
        <ul>
            <li>Représenter les familles auprès de la direction du conservatoire</li>
            <li>Organiser des événements musicaux et culturels</li>
            <li>Faciliter la communication entre tous les acteurs</li>
            <li>Soutenir les projets pédagogiques</li>
            <li>Proposer des services aux adhérents (assurance, covoiturage, etc.)</li>
        </ul>

        <h3>Le bureau</h3>
        <p><strong>Président :</strong> Jean Dupont<br>
        <strong>Vice-Présidente :</strong> Marie Martin<br>
        <strong>Trésorier :</strong> Pierre Durand<br>
        <strong>Secrétaire :</strong> Sophie Lefebvre</p>
    </section>

    <section id="adherer" class="content-box">
        <h2>Adhérer à l'APEEAC</h2>
        <p>En devenant membre de l'APEEAC, vous soutenez nos actions et bénéficiez de nombreux avantages :</p>
        
        <ul>
            <li>Tarifs préférentiels sur l'assurance instrument</li>
            <li>Accès prioritaire aux événements</li>
            <li>Participation aux décisions de l'association</li>
            <li>Accès aux petites annonces et au covoiturage</li>
            <li>Newsletter mensuelle</li>
        </ul>

        <p><strong>Cotisation annuelle :</strong> 20€ par famille</p>
        
        <a href="#" class="btn">Télécharger le bulletin d'adhésion</a>
    </section>

    <section id="contacter" class="content-box">
        <h2>Nous contacter</h2>
        <p><strong>Email :</strong> contact@apeeac.fr</p>
        <p><strong>Téléphone :</strong> 01 23 45 67 89</p>
        <p><strong>Adresse :</strong><br>
        APEEAC<br>
        Conservatoire Municipal<br>
        123 rue de la Musique<br>
        75000 Paris</p>
        
        <p>Vous pouvez également nous rencontrer lors de nos permanences tous les mercredis de 17h à 19h à l'accueil du conservatoire.</p>
    </section>

    <section id="benevole" class="content-box">
        <h2>Devenir bénévole</h2>
        <p>L'APEEAC fonctionne grâce à l'engagement de parents bénévoles. Si vous souhaitez vous impliquer dans la vie de l'association, plusieurs possibilités s'offrent à vous :</p>
        
        <ul>
            <li><strong>Organisation d'événements :</strong> Concerts, spectacles, fêtes</li>
            <li><strong>Communication :</strong> Réseaux sociaux, newsletter, site web</li>
            <li><strong>Administratif :</strong> Gestion des adhésions, comptabilité</li>
            <li><strong>Représentation :</strong> Participation aux conseils d'administration</li>
        </ul>
        
        <p>Même quelques heures par mois peuvent faire la différence ! Contactez-nous pour en savoir plus.</p>
        
        <a href="#contacter" class="btn">Nous contacter</a>
    </section>
</div>
@endsection