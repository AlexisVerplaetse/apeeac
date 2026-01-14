<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conservatoire Municipal de Musique</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        header p {
            font-style: italic;
            opacity: 0.9;
        }

        nav {
            background-color: #34495e;
            padding: 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav li {
            margin: 0;
        }

        nav a {
            display: block;
            padding: 1rem 2rem;
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        .container {
            max-width: 1100px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .page {
            display: none;
            background: white;
            padding: 3rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 5px;
        }

        .page.active {
            display: block;
        }

        h2 {
            color: #2c3e50;
            border-bottom: 3px solid #e74c3c;
            padding-bottom: 0.5rem;
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        h3 {
            color: #34495e;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        p {
            line-height: 1.8;
            margin-bottom: 1.5rem;
            text-align: justify;
        }

        .intro-section {
            background-color: #ecf0f1;
            padding: 2rem;
            border-left: 5px solid #e74c3c;
            margin-bottom: 2rem;
        }

        form {
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2c3e50;
            font-weight: 600;
        }

        input, textarea, select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #bdc3c7;
            border-radius: 3px;
            font-size: 1rem;
            font-family: Arial, sans-serif;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #e74c3c;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            background-color: #e74c3c;
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 3px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #c0392b;
        }

        .info-section {
            background-color: #f8f9fa;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 5px;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            padding: 0.8rem 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-list li:last-child {
            border-bottom: none;
        }

        .info-list strong {
            color: #e74c3c;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        .instruments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .instrument-card {
            background-color: #ecf0f1;
            padding: 1.5rem;
            text-align: center;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .instrument-card:hover {
            transform: translateY(-5px);
            background-color: #e8eef1;
        }
    </style>
</head>
<body>
    <header>
        <h1>🎵 Conservatoire Municipal de Musique</h1>
        <p>L'excellence musicale au service de tous</p>
    </header>

    <nav>
        <ul>
            <li><a onclick="showPage('accueil')">Accueil</a></li>
            <li><a onclick="showPage('contact')">Contact</a></li>
            <li><a onclick="showPage('inscription')">Inscription</a></li>
            <li><a onclick="showPage('infos')">Informations</a></li>
        </ul>
    </nav>

    <div class="container">
        <!-- Page Accueil -->
        <div id="accueil" class="page active">
            <h2>Bienvenue au Conservatoire</h2>
            
            <div class="intro-section">
                <p><strong>Depuis plus de 50 ans, le Conservatoire Municipal de Musique forme des musiciens passionnés et accompagne chacun dans son parcours artistique.</strong></p>
            </div>

            <p>Notre établissement propose un enseignement musical de qualité pour tous les âges et tous les niveaux. Que vous soyez débutant ou musicien confirmé, nos professeurs diplômés vous accompagneront dans votre progression.</p>

            <h3>Nos disciplines</h3>
            <div class="instruments-grid">
                <div class="instrument-card">
                    <h4>🎹 Piano</h4>
                </div>
                <div class="instrument-card">
                    <h4>🎻 Violon</h4>
                </div>
                <div class="instrument-card">
                    <h4>🎸 Guitare</h4>
                </div>
                <div class="instrument-card">
                    <h4>🎺 Trompette</h4>
                </div>
                <div class="instrument-card">
                    <h4>🎷 Saxophone</h4>
                </div>
                <div class="instrument-card">
                    <h4>🎤 Chant</h4>
                </div>
            </div>

            <p>Le conservatoire organise régulièrement des auditions, concerts et masterclasses permettant à nos élèves de se produire en public et de rencontrer des artistes professionnels.</p>
        </div>

        <!-- Page Contact -->
        <div id="contact" class="page">
            <h2>Nous contacter</h2>

            <div class="info-section">
                <h3>Coordonnées</h3>
                <ul class="info-list">
                    <li><strong>Adresse :</strong> 15 rue de la Musique, 75000 Paris</li>
                    <li><strong>Téléphone :</strong> 01 23 45 67 89</li>
                    <li><strong>Email :</strong> contact@conservatoire-municipal.fr</li>
                    <li><strong>Horaires :</strong> Lundi au Vendredi : 9h - 19h / Samedi : 9h - 17h</li>
                </ul>
            </div>

            <h3>Formulaire de contact</h3>
            <form onsubmit="handleContact(event)">
                <div class="form-group">
                    <label for="nom">Nom et prénom *</label>
                    <input type="text" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse email *</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="tel" id="tel">
                </div>
                <div class="form-group">
                    <label for="sujet">Sujet</label>
                    <select id="sujet">
                        <option>Demande d'information</option>
                        <option>Inscription</option>
                        <option>Tarifs</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Votre message *</label>
                    <textarea id="message" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>

        <!-- Page Inscription -->
        <div id="inscription" class="page">
            <h2>S'inscrire au Conservatoire</h2>

            <div class="intro-section">
                <p>Les inscriptions pour l'année scolaire 2025-2026 sont ouvertes. Complétez le formulaire ci-dessous pour débuter votre parcours musical.</p>
            </div>

            <form onsubmit="handleInscription(event)">
                <div class="form-group">
                    <label for="nom-eleve">Nom de l'élève *</label>
                    <input type="text" id="nom-eleve" required>
                </div>
                <div class="form-group">
                    <label for="prenom-eleve">Prénom de l'élève *</label>
                    <input type="text" id="prenom-eleve" required>
                </div>
                <div class="form-group">
                    <label for="date-naissance">Date de naissance *</label>
                    <input type="date" id="date-naissance" required>
                </div>
                <div class="form-group">
                    <label for="email-parent">Email du responsable *</label>
                    <input type="email" id="email-parent" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone *</label>
                    <input type="tel" id="telephone" required>
                </div>
                <div class="form-group">
                    <label for="instrument">Instrument souhaité *</label>
                    <select id="instrument" required>
                        <option value="">-- Choisir un instrument --</option>
                        <option>Piano</option>
                        <option>Violon</option>
                        <option>Guitare classique</option>
                        <option>Guitare électrique</option>
                        <option>Flûte traversière</option>
                        <option>Clarinette</option>
                        <option>Saxophone</option>
                        <option>Trompette</option>
                        <option>Batterie</option>
                        <option>Chant</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau</label>
                    <select id="niveau">
                        <option>Débutant</option>
                        <option>Initié (1-2 ans de pratique)</option>
                        <option>Intermédiaire (3-5 ans de pratique)</option>
                        <option>Avancé (plus de 5 ans)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="remarques">Remarques ou demandes particulières</label>
                    <textarea id="remarques"></textarea>
                </div>
                <button type="submit">Valider l'inscription</button>
            </form>
        </div>

        <!-- Page Infos -->
        <div id="infos" class="page">
            <h2>Informations pratiques</h2>

            <div class="info-section">
                <h3>Tarifs annuels 2025-2026</h3>
                <ul class="info-list">
                    <li><strong>Éveil musical (4-6 ans) :</strong> 180€</li>
                    <li><strong>Cours individuel (30 min) :</strong> 420€</li>
                    <li><strong>Cours individuel (45 min) :</strong> 580€</li>
                    <li><strong>Cours individuel (1h) :</strong> 720€</li>
                    <li><strong>Formation musicale :</strong> 150€</li>
                    <li><strong>Pratique collective :</strong> 100€</li>
                </ul>
                <p><em>Réductions possibles selon quotient familial. Renseignez-vous auprès du secrétariat.</em></p>
            </div>

            <h3>Organisation de l'année</h3>
            <p>L'année scolaire s'étend de septembre à juin et suit le calendrier des vacances scolaires de la zone. Les cours ont lieu du lundi au samedi.</p>

            <div class="info-section">
                <h3>Dates importantes</h3>
                <ul class="info-list">
                    <li><strong>Rentrée :</strong> 2 septembre 2025</li>
                    <li><strong>Concert d'automne :</strong> 15 décembre 2025</li>
                    <li><strong>Auditions de classe :</strong> Février-Mars 2026</li>
                    <li><strong>Examens :</strong> Mai-Juin 2026</li>
                    <li><strong>Concert de fin d'année :</strong> 20 juin 2026</li>
                </ul>
            </div>

            <h3>Documents à fournir</h3>
            <p>Pour finaliser votre inscription, vous devrez fournir les documents suivants :</p>
            <ul style="margin-left: 2rem; line-height: 2;">
                <li>Fiche d'inscription complétée</li>
                <li>Photocopie du livret de famille</li>
                <li>Justificatif de domicile</li>
                <li>Photo d'identité</li>
                <li>Attestation d'assurance</li>
            </ul>

            <h3>Notre équipe pédagogique</h3>
            <p>Le conservatoire compte 25 professeurs diplômés (DE, DEMS, CA) et passionnés, spécialisés dans leurs disciplines respectives. Tous sont engagés dans la réussite de chaque élève et proposent un enseignement adapté à chacun.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Conservatoire Municipal de Musique - Tous droits réservés</p>
    </footer>

    <script>
        function showPage(pageId) {
            const pages = document.querySelectorAll('.page');
            pages.forEach(p => p.classList.remove('active'));
            document.getElementById(pageId).classList.add('active');
            window.scrollTo(0, 0);
        }

        function handleContact(e) {
            e.preventDefault();
            alert('Votre message a bien été envoyé. Nous vous répondrons dans les meilleurs délais.');
            e.target.reset();
        }

        function handleInscription(e) {
            e.preventDefault();
            const instrument = document.getElementById('instrument').value;
            if (!instrument) {
                alert('Veuillez sélectionner un instrument.');
                return;
            }
            alert('Votre demande d\'inscription a été enregistrée. Vous recevrez une confirmation par email sous 48h.');
            e.target.reset();
        }
    </script>
</body>
</html>