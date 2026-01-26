@extends('layouts.app') <!-- On utilise le layout -->

@section('title', 'Accueil') <!-- Titre spécifique -->

@section('content') <!-- Contenu spécifique -->


 
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- Hero Section -->
    <section class="hero">
        <h1>Association des Parents d'Élèves du Conservatoire</h1>
        <p>Accompagner et soutenir la vie musicale au sein de notre conservatoire</p>
    </section>

     @if(Auth::check() && Auth::user()->role === 'Admin')
    <p>Bienvenue, {{ Auth::user()->nom }} !</p>
    <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Déconnexion</button>
        </form>
    @endif
    
    <br>

    
    <!-- Navigation latérale -->
        <div class="w-80 bg-white border-r border-gray-200 overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">📄</span>
                    </div>
                    <h2 class="ml-3 text-lg font-semibold text-gray-800">
                        Sommaire du document
                    </h2>
                    
                </div>

                <!-- Liste des archives -->
                @if($archives->isEmpty())
                <p>Aucune année enregistrée.</p>    
                @else
    <ul>
        <!-- Boucle sur les archives -->
        @foreach($archives as $archive)
            <li class="date_archive">
                
                <!-- Lien vers les actualités -->
                <a href="{{ route('actualites.annee', $archive->id) }}">
                    {{ $archive->annee }}
                </a>

                @if(Auth::check() && Auth::user()->role === 'Admin')
                    <!-- Formulaire pour supprimer -->
                    <form action="{{ route('archive.destroy', $archive->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-admin" onclick="return confirm('Voulez-vous vraiment supprimer cette année ?')">
                            Supprimer
                        </button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
    @endif

    

<!-- Formulaire caché par défaut -->
    @if(Auth::check() && Auth::user()->role === 'Admin')
    <button id="bouton_add_annee" class="btn-admin">Ajouter une annee</button>

    
        <form id="form_archive" action="/archive" method="POST" style="display:none; margin-top:10px;">
        @csrf
            <input type="text" name="annee" placeholder="Annee" required>
            <button type="submit" class="btn-admin">Envoyer</button>
        </form>
        <script>
    // Capter le clic sur le bouton
    document.getElementById('bouton_add_annee').addEventListener('click', function() {
    const form = document.getElementById('form_archive');
            if(form.style.display === 'none') {
                form.style.display = 'block'; // afficher le formulaire
            } else {
                form.style.display = 'none'; // cacher si on reclique
            }
            });
        </script>
    @endif




    
                <nav class="space-y-1">
                    <template x-for="section in sections" :key="section.id">
                        <button
                            @click="activeSection = section.id"
                            :class="activeSection === section.id ? 
                                'bg-blue-100 text-blue-700 font-medium shadow-sm' : 
                                'text-gray-700 hover:bg-gray-100'"
                            class="w-full text-left px-4 py-3 rounded-lg transition-all duration-200 flex items-start"
                        >
                            <span class="text-xl mr-3 mt-0.5" x-text="section.icon"></span>
                            <span class="flex-1 text-sm leading-relaxed" x-text="section.title"></span>
                            <span x-show="activeSection === section.id" class="text-blue-500 ml-2">▶</span>
                        </button>
                    </template>
                </nav>
                
            </div>
        </div>
        
       

    <!-- Main Content -->
    <div class="container">
        <!-- Actualités Section -->
        <section id="actualites">
            
            <div class="articles-grid">
                <article class="article-card">
                    <div class="article-image">🎵</div>
                    <div class="article-content">
                        <div class="article-date">10 janvier 2026</div>
                        <h3 class="article-title">Concert de printemps 2026</h3>
                        <p class="article-excerpt">Les inscriptions pour le concert de printemps sont ouvertes ! Une belle opportunité pour nos élèves de se produire sur scène.</p>
                        <a href="#" class="read-more">Lire la suite →</a>
                    </div>
                </article>
        </section>

    </div>
        
        <!-- Calendrier -->
        <section class="calendar-section">
            <div class="calendar-container">
                <div class="calendar-header">
                    <h2>📅 Calendrier des Événements</h2>
                </div>

                <div class="calendar-controls">
                    <button id="prevMonth">← Précédent</button>
                    <span class="calendar-month" id="currentMonth">Janvier 2026</span>
                    <button id="nextMonth">Suivant →</button>
                </div>

                <div class="calendar-grid">
                    <div class="calendar-weekdays">
                        <div class="calendar-weekday">Lun</div>
                        <div class="calendar-weekday">Mar</div>
                        <div class="calendar-weekday">Mer</div>
                        <div class="calendar-weekday">Jeu</div>
                        <div class="calendar-weekday">Ven</div>
                        <div class="calendar-weekday">Sam</div>
                        <div class="calendar-weekday">Dim</div>
                    </div>
                    <div class="calendar-days" id="calendarDays"></div>
                </div>

                <div class="calendar-legend">
                    <div class="legend-item">
                        <div class="legend-dot today"></div>
                        <span>Aujourd'hui</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-dot event"></div>
                        <span>Événement</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

   
          

    <script>
        // Configuration du calendrier
        let currentDate = new Date();
        
        // Événements (dates au format YYYY-MM-DD)
        const events = [
        ];

        const monthNames = [
            'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
            'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
        ];

        function renderCalendar() {
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();
            
            // Mise à jour du titre
            document.getElementById('currentMonth').textContent = `${monthNames[month]} ${year}`;
            
            // Premier jour du mois
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            
            // Jour de la semaine du premier jour (0 = dimanche, 1 = lundi...)
            let startDay = firstDay.getDay();
            startDay = startDay === 0 ? 6 : startDay - 1; // Ajuster pour commencer le lundi
            
            const daysInMonth = lastDay.getDate();
            const daysInPrevMonth = new Date(year, month, 0).getDate();
            
            const calendarDays = document.getElementById('calendarDays');
            calendarDays.innerHTML = '';
            
            // Jours du mois précédent
            for (let i = startDay - 1; i >= 0; i--) {
                const day = daysInPrevMonth - i;
                const dayDiv = createDayElement(day, 'other-month');
                calendarDays.appendChild(dayDiv);
            }
            
            // Jours du mois actuel
            const today = new Date();
            for (let day = 1; day <= daysInMonth; day++) {
                const isToday = day === today.getDate() && 
                               month === today.getMonth() && 
                               year === today.getFullYear();
                
                const dateString = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                const hasEvent = events.includes(dateString);
                
                const classes = [];
                if (isToday) classes.push('today');
                if (hasEvent) classes.push('has-event');
                
                const dayDiv = createDayElement(day, classes.join(' '));
                calendarDays.appendChild(dayDiv);
            }
            
            // Jours du mois suivant
            const totalCells = calendarDays.children.length;
            const remainingCells = 42 - totalCells; // 6 semaines max
            for (let day = 1; day <= remainingCells; day++) {
                const dayDiv = createDayElement(day, 'other-month');
                calendarDays.appendChild(dayDiv);
            }
        }

        function createDayElement(day, className) {
            const div = document.createElement('div');
            div.className = `calendar-day ${className}`;
            div.textContent = day;
            return div;
        }

        // Navigation
        document.getElementById('prevMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        });

        // Initialisation
        renderCalendar();
    </script>
</body>
</html>
@endsection