@extends('layouts.app')

@section('title', 'Espace Administratif - APEEAC')

@section('content')
<section class="hero">
    <h1>Espace Administratif</h1>
    <p>Documents et informations pour les membres du bureau</p>
</section>

<div class="container">
    <section class="content-box">
        <h2>Documents officiels</h2>
        
        <div class="documents-grid">
            <div class="doc-card">
                <div class="doc-icon">📜</div>
                <h3>Statuts de l'association</h3>
                <p>Version mise à jour lors de la dernière AG</p>
                <a href="#" class="btn-small" download>Télécharger (PDF)</a>
                <p class="doc-date">Dernière modification : 15/09/2024</p>
            </div>

            <div class="doc-card">
                <div class="doc-icon">📋</div>
                <h3>Règlement intérieur</h3>
                <p>Règles de fonctionnement de l'association</p>
                <a href="#" class="btn-small" download>Télécharger (PDF)</a>
                <p class="doc-date">Dernière modification : 15/09/2024</p>
            </div>

            <div class="doc-card">
                <div class="doc-icon">🏛️</div>
                <h3>Récépissé de déclaration</h3>
                <p>Enregistrement en Préfecture</p>
                <a href="#" class="btn-small" download>Télécharger (PDF)</a>
                <p class="doc-date">Date : 20/03/2005</p>
            </div>

            <div class="doc-card">
                <div class="doc-icon">📊</div>
                <h3>Journal Officiel</h3>
                <p>Publication de la création de l'association</p>
                <a href="#" class="btn-small" download>Télécharger (PDF)</a>
                <p class="doc-date">Date : 01/04/2005</p>
            </div>
        </div>
    </section>

    <section class="content-box">
        <h2>Assemblées Générales</h2>
        
        <div class="ag-section">
            <h3>Prochaine Assemblée Générale</h3>
            <div class="next-ag">
                <p><strong>Date :</strong> Samedi 28 septembre 2025 à 10h00</p>
                <p><strong>Lieu :</strong> Auditorium du Conservatoire</p>
                <p><strong>Ordre du jour :</strong></p>
                <ul>
                    <li>Rapport moral du Président</li>
                    <li>Rapport financier du Trésorier</li>
                    <li>Vote du budget prévisionnel 2025-2026</li>
                    <li>Projets pour l'année à venir</li>
                    <li>Questions diverses</li>
                </ul>
                <a href="#" class="btn">Télécharger la convocation</a>
            </div>
        </div>

        <div class="ag-archives">
            <h3>Archives des AG précédentes</h3>
            
            <div class="archive-item">
                <h4>AG 2024 - 30 septembre 2024</h4>
                <div class="archive-links">
                    <a href="#" download>📄 Convocation</a>
                    <a href="#" download>📄 Compte-rendu</a>
                    <a href="#" download>📄 Rapport financier</a>
                    <a href="#" download>📊 Présentation</a>
                </div>
            </div>

            <div class="archive-item">
                <h4>AG 2023 - 25 septembre 2023</h4>
                <div class="archive-links">
                    <a href="#" download>📄 Convocation</a>
                    <a href="#" download>📄 Compte-rendu</a>
                    <a href="#" download>📄 Rapport financier</a>
                </div>
            </div>

            <div class="archive-item">
                <h4>AG 2022 - 26 septembre 2022</h4>
                <div class="archive-links">
                    <a href="#" download>📄 Convocation</a>
                    <a href="#" download>📄 Compte-rendu</a>
                    <a href="#" download>📄 Rapport financier</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-box">
        <h2>Comptes-rendus des réunions de bureau</h2>
        
        <table class="cr-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Participants</th>
                    <th>Thèmes abordés</th>
                    <th>Document</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/01/2026</td>
                    <td>Bureau complet</td>
                    <td>Préparation concert de printemps, Budget</td>
                    <td><a href="#" download>📄 Télécharger</a></td>
                </tr>
                <tr>
                    <td>08/12/2025</td>
                    <td>Bureau complet</td>
                    <td>Bilan concert de Noël, Adhésions</td>
                    <td><a href="#" download>📄 Télécharger</a></td>
                </tr>
                <tr>
                    <td>15/11/2025</td>
                    <td>Bureau complet</td>
                    <td>Organisation AG, Relations avec le conservatoire</td>
                    <td><a href="#" download>📄 Télécharger</a></td>
                </tr>
                <tr>
                    <td>10/10/2025</td>
                    <td>Bureau complet</td>
                    <td>Rentrée 2025, Nouveaux projets</td>
                    <td><a href="#" download>📄 Télécharger</a></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="content-box">
        <h2>Documents comptables</h2>
        
        <div class="finance-section">
            <div class="finance-card">
                <h3>Budget 2025-2026</h3>
                <p>Budget prévisionnel voté en AG</p>
                <a href="#" class="btn-small" download>📊 Télécharger</a>
            </div>

            <div class="finance-card">
                <h3>Bilan comptable 2024-2025</h3>
                <p>Comptes certifiés par le trésorier</p>
                <a href="#" class="btn-small" download>📊 Télécharger</a>
            </div>

            <div class="finance-card">
                <h3>Suivi budgétaire en cours</h3>
                <p>État des dépenses et recettes (réservé au bureau)</p>
                <a href="#" class="btn-small" download>📊 Télécharger</a>
            </div>
        </div>
    </section>

    <section class="content-box">
        <h2>Adhésions et membres</h2>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">156</div>
                <div class="stat-label">Familles adhérentes 2025-2026</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">22</div>
                <div class="stat-label">Bénévoles actifs</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">+12%</div>
                <div class="stat-label">Progression vs. année dernière</div>
            </div>
        </div>

        <div class="admin-links">
            <a href="#" class="btn">Liste des adhérents 2025-2026</a>
            <a href="#" class="btn">Export pour mailing</a>
            <a href="#" class="btn">Statistiques détaillées</a>
        </div>
    </section>

    <section class="content-box">
        <h2>Modèles et outils</h2>
        
        <div class="tools-grid">
            <div class="tool-card">
                <h3>📝 Modèles de documents</h3>
                <ul>
                    <li><a href="#" download>Convocation réunion</a></li>
                    <li><a href="#" download>Compte-rendu type</a></li>
                    <li><a href="#" download>Note de frais</a></li>
                    <li><a href="#" download>Demande de subvention</a></li>
                </ul>
            </div>

            <div class="tool-card">
                <h3>🎨 Charte graphique</h3>
                <ul>
                    <li><a href="#" download>Logo (formats variés)</a></li>
                    <li><a href="#" download>Modèle affiche</a></li>
                    <li><a href="#" download>Modèle flyer</a></li>
                    <li><a href="#" download>Signatures email</a></li>
                </ul>
            </div>

            <div class="tool-card">
                <h3>📧 Communication</h3>
                <ul>
                    <li><a href="#" download>Template newsletter</a></li>
                    <li><a href="#" download>Liste diffusion</a></li>
                    <li><a href="#" download>Planning réseaux sociaux</a></li>
                    <li><a href="#" download>Guide communication</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="content-box">
        <h2>Assurances</h2>
        
        <div class="insurance-info">
            <h3>Responsabilité Civile de l'association</h3>
            <p><strong>Assureur :</strong> MAIF</p>
            <p><strong>N° de contrat :</strong> XXX XXX XXX</p>
            <p><strong>Échéance :</strong> 31/12/2025</p>
            <a href="#" class="btn-small" download>📄 Attestation d'assurance</a>
        </div>

        <div class="insurance-info">
            <h3>Assurance instruments (partenariat)</h3>
            <p><strong>Partenaire :</strong> Assurances Musiciens</p>
            <p><strong>Tarif négocié :</strong> -15% pour les adhérents</p>
            <a href="#" class="btn-small" download>📄 Conditions du partenariat</a>
        </div>
    </section>

    <section class="content-box">
        <h2>Contacts utiles</h2>
        
        <div class="contacts-admin">
            <div class="contact-admin-card">
                <h3>Direction du Conservatoire</h3>
                <p><strong>Directeur :</strong> M. Jacques BERNARD</p>
                <p><strong>Email :</strong> direction@conservatoire.fr</p>
                <p><strong>Tél :</strong> 01 23 45 67 80</p>
            </div>

            <div class="contact-admin-card">
                <h3>Services Municipaux</h3>
                <p><strong>Service Vie Associative</strong></p>
                <p><strong>Email :</strong> associations@mairie.fr</p>
                <p><strong>Tél :</strong> 01 23 45 67 00</p>
            </div>

            <div class="contact-admin-card">
                <h3>Expert-comptable</h3>
                <p><strong>Cabinet DURAND & Associés</strong></p>
                <p><strong>Email :</strong> contact@cabinet-durand.fr</p>
                <p><strong>Tél :</strong> 01 23 45 67 99</p>
            </div>
        </div>
    </section>

    <section class="content-box info-box">
        <h2>ℹ️ Informations importantes</h2>
        <p>Cet espace est réservé aux membres du bureau et aux bénévoles autorisés de l'APEEAC. Les documents confidentiels (liste des adhérents, données financières détaillées) ne doivent pas être diffusés en dehors de l'association.</p>
        <p>Pour toute question concernant l'accès aux documents ou leur utilisation, contactez le secrétariat à <a href="mailto:secretaire@apeeac.fr">secretaire@apeeac.fr</a></p>
    </section>
</div>
@endsection
