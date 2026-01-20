 <!-- On utilise le layout -->

<?php $__env->startSection('title', 'Accueil'); ?> <!-- Titre spécifique -->

<?php $__env->startSection('content'); ?> <!-- Contenu spécifique -->



    <main class="container">
        <section class="card">
            <h2>Bienvenue</h2>
            <p class="meta">Test — <time datetime="2026-01-13">13 janvier 2026</time></p>
            <p>Ceci est une page HTML de test pour la vue <code>actualites.blade.php</code>. Remplacez le contenu par vos données réelles.</p>
        </section>

        <section class="grid">
            <article class="card">
                <h3>Actualité 1</h3>
                <p class="meta">Publié le 10 janv. 2026</p>
                <p>Courte description de l'actualité numéro 1. Utilisez cette carte pour lister des articles ou des événements.</p>
                <a href="#" class="button">Lire</a>
            </article>

            <article class="card">
                <h3>Actualité 2</h3>
                <p class="meta">Publié le 05 janv. 2026</p>
                <p>Courte description de l'actualité numéro 2. Modifiez ce texte pour vos besoins.</p>
                <a href="#" class="button">Lire</a>
            </article>

            <article class="card">
                <h3>Actualité 3</h3>
                <p class="meta">Publié le 01 janv. 2026</p>
                <p>Courte description de l'actualité numéro 3. Exemple de mise en page responsive.</p>
                <a href="#" class="button">Lire</a>
            </article>
        </section>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/pages/actualites.blade.php ENDPATH**/ ?>