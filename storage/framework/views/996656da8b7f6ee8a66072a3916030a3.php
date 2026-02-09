<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>

<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Hero Section -->
<section class="hero">
    <h1>Association des Parents d'Élèves du Conservatoire</h1>
    <p>Accompagner et soutenir la vie musicale au sein de notre conservatoire</p>
</section>

<?php if(Auth::check() && Auth::user()->role === 'Admin'): ?>
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <p class="text-gray-700">Bienvenue, <?php echo e(Auth::user()->nom); ?> !</p>
        <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
            <?php echo csrf_field(); ?>
            <button type="submit" class="logout-btn">Déconnexion</button>
        </form>
    </div>
<?php endif; ?>

<!-- Messages de feedback -->
<div class="max-w-7xl mx-auto px-4 mt-4">
    <?php if(session('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc list-inside">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

<!-- ================= LAYOUT PRINCIPAL ================= -->
<div class="flex flex-col lg:flex-row gap-6 max-w-7xl mx-auto px-4 py-6">

    <!-- ===== SIDEBAR / ANNEES (passe en haut sur mobile) ===== -->
    <aside class="w-full lg:w-80 bg-white border border-gray-200 rounded-lg shadow-sm">
        <div class="p-4 lg:p-6">

            <div class="flex items-center mb-4 lg:mb-6">
                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                    <span class="text-white text-xl lg:text-2xl">📄</span>
                </div>
                <h2 class="ml-3 text-base lg:text-lg font-semibold text-gray-800">
                    Sommaire des actualités
                </h2>
            </div>

            <!-- Liste des archives -->
            <?php if($archives->isEmpty()): ?>
                <p class="text-sm text-gray-600">Aucune année enregistrée.</p>
            <?php else: ?>
                <ul class="space-y-3">
                    <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="border-b border-gray-100 pb-3 last:border-0">
                            <a href="<?php echo e(route('actualites.annee', $archive->id)); ?>"
                               class="text-sm lg:text-base font-semibold text-blue-600 hover:text-blue-800 hover:underline block">
                                📅 <?php echo e($archive->annee); ?>

                            </a>

                            <?php if(Auth::check() && Auth::user()->role === 'Admin'): ?>
                                <form action="<?php echo e(route('archive.destroy', $archive->id)); ?>" method="POST" class="mt-2">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit"
                                            class="text-xs lg:text-sm bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                                            onclick="return confirm('Voulez-vous vraiment supprimer cette année ?')">
                                        Supprimer
                                    </button>
                                </form>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

            <!-- Ajouter une année (Admin) -->
            <?php if(Auth::check() && Auth::user()->role === 'Admin'): ?>
                <button id="bouton_add_annee" class="mt-4 lg:mt-6 w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 text-sm lg:text-base">
                    ➕ Ajouter une année
                </button>

                <form id="form_archive" action="/archive" method="POST" class="mt-4 hidden">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="annee" placeholder="Ex: 2026"
                           class="border px-3 py-2 rounded w-full mb-2 text-sm lg:text-base" required>
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded w-full hover:bg-green-700 text-sm lg:text-base">
                        Envoyer
                    </button>
                </form>

                <script>
                    document.getElementById('bouton_add_annee')?.addEventListener('click', () => {
                        document.getElementById('form_archive').classList.toggle('hidden');
                    });
                </script>
            <?php endif; ?>

        </div>
    </aside>

    <!-- ===== CONTENU PRINCIPAL / ACTUALITES ===== -->
<main class="flex-1 min-w-0">

    <!-- Bouton Ajouter une actualité (Admin) -->
    <?php if(Auth::check() && Auth::user()->role === 'Admin'): ?>
        <button id="bouton_add_actualite" class="mb-6 w-full lg:w-auto bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 text-sm lg:text-base">
            ➕ Ajouter une actualité
        </button>

        <form id="form_actualite" action="<?php echo e(route('actualite.store')); ?>" method="POST" enctype="multipart/form-data" class="mb-6 hidden bg-white p-4 lg:p-6 rounded-lg shadow">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Titre *</label>
                <input type="text" name="titre" placeholder="Titre de l'actualité" value="<?php echo e(old('titre')); ?>"
                       class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Contenu *</label>
                
                <!-- Éditeur Quill -->
                <div id="editor-container" class="bg-white border border-gray-300 rounded" style="min-height: 200px;"></div>
                
                <!-- Champ caché pour stocker le contenu HTML -->
                <input type="hidden" name="contenu" id="contenu-hidden" required>
                
                <p class="text-xs text-gray-500 mt-1">Utilisez la barre d'outils pour formater votre texte</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Date de publication *</label>
                <input type="date" name="date_publication" value="<?php echo e(old('date_publication')); ?>"
                       class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Année (Archive) *</label>
                <select name="archive_id" class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    <option value="">-- Choisir une année --</option>
                    <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($archive->id); ?>" <?php echo e(old('archive_id') == $archive->id ? 'selected' : ''); ?>>
                            <?php echo e($archive->annee); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Image (optionnel)</label>
                <input type="file" name="image" accept="image/*"
                       class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base">
                <p class="text-xs text-gray-500 mt-1">Formats : JPEG, PNG, JPG, GIF (max 2 Mo)</p>
            </div>

            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded w-full hover:bg-green-700 text-sm lg:text-base font-semibold">
                Publier l'actualité
            </button>
        </form>
    <?php endif; ?>

        <!-- Liste des actualités -->
        <section id="actualites">
            <h2 class="text-xl lg:text-2xl font-bold mb-4 lg:mb-6">📰 Actualités récentes</h2>
            
            <?php if($actualites->isEmpty()): ?>
                <div class="bg-gray-100 rounded-lg p-6 lg:p-8 text-center">
                    <p class="text-gray-600 text-sm lg:text-base">Aucune actualité pour le moment.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-6">
                    <?php $__currentLoopData = $actualites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actualite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 relative">
                            
                            <!-- Bouton Supprimer (Admin uniquement) -->
                            <?php if(Auth::check() && Auth::user()->role === 'Admin'): ?>
                                <form action="<?php echo e(route('actualite.destroy', $actualite->id)); ?>" method="POST" class="absolute top-2 right-2 z-10">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit"
                                            class="bg-red-500 text-white p-2 rounded-full hover:bg-red-600 shadow-lg transition"
                                            onclick="return confirm('Voulez-vous vraiment supprimer cette actualité ?')"
                                            title="Supprimer l'actualité">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            <?php endif; ?>
                            
                            <!-- Image ou emoji par défaut -->
                            <?php if($actualite->image): ?>
                                <div class="h-40 lg:h-48 rounded-lg overflow-hidden">
                                    <img src="<?php echo e(asset('storage/' . $actualite->image)); ?>" 
                                         alt="<?php echo e($actualite->titre); ?>"
                                         class="w-full h-full object-cover">
                                </div>
                            <?php else: ?>
                                <div class="h-40 lg:h-48 bg-gradient-to-r from-blue-400 to-pink-400 rounded-lg flex items-center justify-center text-4xl lg:text-5xl">
                                    🎵
                                </div>
                            <?php endif; ?>
                            
                            <div class="mt-3 lg:mt-4">
                                <!-- Date et année -->
                                <div class="flex items-center justify-between mb-2">
                                    <p class="text-xs lg:text-sm text-gray-500">
                                        <?php echo e(\Carbon\Carbon::parse($actualite->date_publication)->translatedFormat('d F Y')); ?>

                                    </p>
                                    <?php if($actualite->archive): ?>
                                        <span class="text-xs bg-orange-100 text-orange-600 px-2 py-1 rounded font-medium">
                                            <?php echo e($actualite->archive->annee); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Titre -->
                                <h3 class="text-base lg:text-lg font-semibold mt-2 text-gray-800 line-clamp-2">
                                    <?php echo e($actualite->titre); ?>

                                </h3>
                                
                                <!-- Contenu (extrait) -->
                                <p class="text-sm lg:text-base text-gray-600 mt-2 line-clamp-3">
                                    <?php echo $actualite->contenu; ?>

                                </p>
                                
                                <!-- Lien "Lire la suite" -->
                                <button 
                                   class="text-orange-500 font-semibold mt-3 inline-block hover:text-orange-600 transition text-sm lg:text-base"
                                   onclick="afficherActualite(<?php echo e($actualite->id); ?>)">
                                    Lire la suite →
                                </button>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </section>

        <!-- Modal pour afficher l'actualité complète -->
        <div id="modal-actualite" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
            <div class="bg-white rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto">
                <div class="sticky top-0 bg-white border-b border-gray-200 p-4 flex justify-between items-start">
                    <h2 id="modal-titre" class="text-lg lg:text-2xl font-bold text-gray-800 pr-8"></h2>
                    <button onclick="fermerModal()" class="text-gray-400 hover:text-gray-600 text-3xl leading-none flex-shrink-0">
                        &times;
                    </button>
                </div>
                <div class="p-4 lg:p-6">
                    <p id="modal-date" class="text-xs lg:text-sm text-gray-500 mb-4"></p>
                    <div id="modal-image" class="mb-4"></div>
                    <div id="modal-contenu" class="text-sm lg:text-base text-gray-700 whitespace-pre-wrap leading-relaxed"></div>
                </div>
            </div>
        </div>

        <script>
            // Données des actualités en JSON
            const actualites = <?php echo json_encode($actualites, 15, 512) ?>;
            
            function afficherActualite(id) {
                const actualite = actualites.find(a => a.id === id);
                if (!actualite) return;
                
                document.getElementById('modal-titre').textContent = actualite.titre;
                document.getElementById('modal-date').textContent = new Date(actualite.date_publication).toLocaleDateString('fr-FR', {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                });
                document.getElementById('modal-contenu').innerHTML = actualite.contenu;

                
                // Afficher l'image si elle existe
                const modalImage = document.getElementById('modal-image');
                if (actualite.image) {
                    modalImage.innerHTML = `<img src="/storage/${actualite.image}" alt="${actualite.titre}" class="w-full rounded-lg">`;
                } else {
                    modalImage.innerHTML = '';
                }
                // Afficher la modal
                const modal = document.getElementById('modal-actualite');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }
            // Fermer la modal
            function fermerModal() {
                const modal = document.getElementById('modal-actualite');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }
            // Fermer la modal avec Échap ou clic en dehors
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') fermerModal();
            });
            
            document.getElementById('modal-actualite')?.addEventListener('click', (e) => {
                if (e.target.id === 'modal-actualite') {
                    fermerModal();
                }
            });
        </script>

        


        <!-- Calendrier -->
        <section class="calendar-section mt-8 lg:mt-12">
            <div class="calendar-container bg-white rounded-lg shadow p-4 lg:p-6">
                <div class="calendar-header mb-4">
                    <h2 class="text-lg lg:text-xl font-bold">📅 Calendrier des Événements</h2>
                </div>

                <div class="calendar-controls flex justify-between items-center mb-4 gap-2">
                    <button id="prevMonth" class="bg-blue-500 text-white px-3 lg:px-4 py-2 rounded hover:bg-blue-600 text-sm lg:text-base">
                        ← Préc.
                    </button>
                    <span class="calendar-month font-semibold text-sm lg:text-base" id="currentMonth">Janvier 2026</span>
                    <button id="nextMonth" class="bg-blue-500 text-white px-3 lg:px-4 py-2 rounded hover:bg-blue-600 text-sm lg:text-base">
                        Suiv. →
                    </button>
                </div>

                         <!-- Bouton Ajouter un evenement (Admin) -->
                <?php if(Auth::check() && Auth::user()->role === 'Admin'): ?>
                    <button id="bouton_add_evenement" class="mb-6 w-full lg:w-auto bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 text-sm lg:text-base">
                        ➕ Ajouter un événement
                    </button>

                    <form id="form_evenement" action="<?php echo e(route('evenements')); ?>" method="POST" class="mb-6 hidden bg-white p-4 lg:p-6 rounded-lg shadow">
                        <?php echo csrf_field(); ?>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Titre *</label>
                            <input type="text" name="title" placeholder="Titre de l'événement" value="<?php echo e(old('title')); ?>"
                                   class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Description</label>
                            <textarea name="description" placeholder="Description de l'événement"
                                      class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base focus:outline-none focus:ring-2 focus:ring-green-500" rows="3"><?php echo e(old('description')); ?></textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Date de l'événement *</label>
                            <input type="date" name="event_date" value="<?php echo e(old('event_date')); ?>"
                                   class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm lg:text-base">Catégorie *</label>
                            <select name="category" class="border border-gray-300 px-3 py-2 rounded w-full text-sm lg:text-base focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                <option value="">Sélectionner une catégorie</option>
                                <option value="musique">Musique</option>
                                <option value="théâtre">Théâtre</option>
                                <option value="autres">Autres</option>
                            </select>
                        </div>

                        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded w-full hover:bg-green-700 text-sm lg:text-base font-semibold">
                            Ajouter l'événement
                        </button>
                    </form>
                    <script>
                        document.getElementById('bouton_add_evenement')?.addEventListener('click', () => {
                            document.getElementById('form_evenement').classList.toggle('hidden');
                        });</script>

                <?php endif; ?>
                <div class="calendar-legend flex flex-wrap gap-4 mt-4 text-xs lg:text-sm">
                    <div class="legend-item flex items-center gap-2">
                        <div class="legend-dot w-3 h-3 lg:w-4 lg:h-4 bg-blue-500 rounded-full"></div>
                        <span>Aujourd'hui</span>
                    </div>
                    <div class="legend-item flex items-center gap-2">
                        <div class="legend-dot w-3 h-3 lg:w-4 lg:h-4 bg-yellow-500 rounded-full"></div>
                        <span id="legend-musique">musique</span>
                    </div>
                     <div class="legend-item flex items-center gap-2">
                        <div class="legend-dot w-3 h-3 lg:w-4 lg:h-4 bg-purple-500 rounded-full"></div>
                        <span id="legend-theatre">théâtre</span>
                    </div>
                     <div class="legend-item flex items-center gap-2">
                        <div class="legend-dot w-3 h-3 lg:w-4 lg:h-4 bg-green-500 rounded-full"></div>
                        <span id="legend-autres">Autres</span>
                    </div>
                    
                </div>

        
                <div class="calendar-grid">
                    <div class="calendar-weekdays grid grid-cols-7 gap-1 mb-2">
                        <div class="calendar-weekday text-center font-semibold text-xs lg:text-sm text-gray-600">Lundi</div>
                        <div class="calendar-weekday text-center font-semibold text-xs lg:text-sm text-gray-600">Mardi</div>
                        <div class="calendar-weekday text-center font-semibold text-xs lg:text-sm text-gray-600">Mercredi</div>
                        <div class="calendar-weekday text-center font-semibold text-xs lg:text-sm text-gray-600">Jeudi</div>
                        <div class="calendar-weekday text-center font-semibold text-xs lg:text-sm text-gray-600">Vendredi</div>
                        <div class="calendar-weekday text-center font-semibold text-xs lg:text-sm text-gray-600">Samedi</div>
                        <div class="calendar-weekday text-center font-semibold text-xs lg:text-sm text-gray-600">Dimanche</div>
                    </div>
                    <div class="calendar-days grid grid-cols-7 gap-1" id="calendarDays"></div>
                </div>

                
            </div>
            
        </section>
        
        <!-- Modal pour afficher les événements du jour -->
<div id="modal-evenement" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b border-gray-200 p-4 flex justify-between items-start">
            <h2 class="text-lg lg:text-2xl font-bold text-gray-800">📅 Événements du jour</h2>
            <button onclick="fermerModalEvenement()" class="text-gray-400 hover:text-gray-600 text-3xl leading-none">
                &times;
            </button>
        </div>
        <div class="p-4 lg:p-6">
            <div id="event-list"></div>
        </div>
    </div>
</div>

        <script>
    let currentDate = new Date();
    let events = [];
    
    // Charger les événements via AJAX
    fetch('/api/evenements')
        .then(response => response.json())
        .then(data => {
            events = data;
            renderCalendar();
        });

    const monthNames = [
        'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
        'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
    ];

    // Fonction pour obtenir les événements d'une date
    function getEventsForDate(dateString) {
        return events.filter(event => event.event_date === dateString);
    }

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        
        document.getElementById('currentMonth').textContent = `${monthNames[month]} ${year}`;
        
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        
        let startDay = firstDay.getDay();
        startDay = startDay === 0 ? 6 : startDay - 1;
        
        const daysInMonth = lastDay.getDate();
        const daysInPrevMonth = new Date(year, month, 0).getDate();
        
        const calendarDays = document.getElementById('calendarDays');
        calendarDays.innerHTML = '';
        
        // Jours du mois précédent
        for (let i = startDay - 1; i >= 0; i--) {
            const day = daysInPrevMonth - i;
            const dayDiv = createDayElement(day, 'text-gray-400 text-xs lg:text-sm', []);
            calendarDays.appendChild(dayDiv);
        }
        
        // Jours du mois actuel
        const today = new Date();
        for (let day = 1; day <= daysInMonth; day++) {
            const isToday = day === today.getDate() && 
                           month === today.getMonth() && 
                           year === today.getFullYear();
            
            const dateString = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const dayEvents = getEventsForDate(dateString);
            const hasEvent = dayEvents.length > 0;
            
            let classes = 'text-xs lg:text-sm';

            //si aujourd hui 
            if (isToday) classes += ' bg-blue-500  font-semibold';

            //si l evenement et musique
            else if (hasEvent && dayEvents.some(event => event.category === 'musique')) classes += ' bg-yellow-100 text-yellow-600 font-semibold';
            //si l evenement et theatre
            else if (hasEvent && dayEvents.some(event => event.category === 'théâtre')) classes += ' bg-purple-100 text-purple-600 font-semibold';
            //si l evenement et autres
            else if (hasEvent && dayEvents.some(event => event.category === 'autres')) classes += ' bg-green-100 text-green-600 font-semibold';
            
            const dayDiv = createDayElement(day, classes, dayEvents);
            calendarDays.appendChild(dayDiv);
        }
        
        // Jours du mois suivant
        const totalCells = calendarDays.children.length;
        const remainingCells = 42 - totalCells;
        for (let day = 1; day <= remainingCells; day++) {
            const dayDiv = createDayElement(day, 'text-gray-400 text-xs lg:text-sm', []);
            calendarDays.appendChild(dayDiv);
        }
    }

    function createDayElement(day, className, dayEvents) {
    const div = document.createElement('div');
    div.className = `calendar-day text-center p-2 lg:p-2 rounded hover:bg-gray-500 cursor-pointer ${className}`;
    
    // Numéro du jour
    const dayNumber = document.createElement('div');
    dayNumber.textContent = day;
    dayNumber.className = 'font-semibold';
    div.appendChild(dayNumber);
    
    // Si des événements existent, afficher UN gros point sous le numéro du jour
    if (dayEvents && dayEvents.length > 0) {
        div.style.cursor = 'pointer';
        div.addEventListener('click', () => showEventModal(dayEvents));
        
        const dot = document.createElement('div');

        // Déterminer la couleur du point en fonction de la catégorie principale de l'événement
        const categories = dayEvents.map(event => event.category);
        if (categories.includes('musique')) {
            dot.className = 'w-2 h-2 lg:w-4 lg:h-4 bg-yellow-500 rounded-full mx-1 mt-0 border-2 border-black';
        } else if (categories.includes('théâtre')) {
            dot.className = 'w-2 h-2 lg:w-4 lg:h-4 bg-purple-500 rounded-full mx-1 mt-0 border-2 border-black';
        } else if (categories.includes('autres')) {
            dot.className = 'w-2 h-2 lg:w-4 lg:h-4 bg-green-500 rounded-full mx-1 mt-0 border-2 border-black';
        } 

        
        div.appendChild(dot);

        
    }
    
    return div;
}

    // Afficher les événements dans une modal
function showEventModal(dayEvents) {
    const modal = document.getElementById('modal-evenement');
    const eventList = document.getElementById('event-list');
    
    eventList.innerHTML = '';
    
    dayEvents.forEach(event => {
        const eventDiv = document.createElement('div');
        eventDiv.className = 'border-b border-gray-200 pb-4 mb-4 relative';
        
        const title = document.createElement('h3');
        title.className = 'font-semibold text-lg text-gray-800 mb-2';
        title.textContent = event.title;
        
        const date = document.createElement('p');
        date.className = 'text-sm text-gray-600 mb-2';
        date.textContent = '📅 ' + new Date(event.event_date).toLocaleDateString('fr-FR', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
        
        eventDiv.appendChild(title);
        eventDiv.appendChild(date);
        
        if (event.description) {
            const description = document.createElement('p');
            description.className = 'text-sm text-gray-700 mt-2';
            description.textContent = event.description;
            eventDiv.appendChild(description);
        }
        //afficher la categorie
        const category = document.createElement('p');
        category.className = 'text-xs text-gray-500 mt-1';
        category.textContent = `Catégorie: ${event.category}`;
        eventDiv.appendChild(category);

        // ✅ Bouton supprimer (uniquement pour Admin)
        <?php if(Auth::check() && Auth::user()->role === 'Admin'): ?>
            const deleteForm = document.createElement('form');
            deleteForm.action = `/evenements/${event.id}`;
            deleteForm.method = 'POST';
            deleteForm.className = 'absolute top-2 right-2';
            deleteForm.onsubmit = function(e) {
                return confirm('Voulez-vous vraiment supprimer cet événement ?');
            };
            
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = '<?php echo e(csrf_token()); ?>';
            
            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'DELETE';
            
            const deleteButton = document.createElement('button');
            deleteButton.type = 'submit';
            deleteButton.className = 'bg-red-500 text-white p-2 rounded-full hover:bg-red-600 shadow-lg transition';
            deleteButton.title = 'Supprimer l\'événement';
            deleteButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>`;
            
            deleteForm.appendChild(csrfInput);
            deleteForm.appendChild(methodInput);
            deleteForm.appendChild(deleteButton);
            eventDiv.appendChild(deleteForm);
        <?php endif; ?>
        
        eventList.appendChild(eventDiv);
    });
    
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}



    function fermerModalEvenement() {
        const modal = document.getElementById('modal-evenement');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    document.getElementById('prevMonth')?.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    document.getElementById('nextMonth')?.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });

    // Fermer avec Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') fermerModalEvenement();
    });

    // Initialiser le calendrier
    renderCalendar();
</script>
<script>
    let quill;
    
    document.getElementById('bouton_add_actualite')?.addEventListener('click', () => {
        const form = document.getElementById('form_actualite');
        form.classList.toggle('hidden');
        
        // Initialiser Quill seulement lors de la première ouverture du formulaire
        if (!quill && !form.classList.contains('hidden')) {
            quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'],        // Gras, italique, souligné
                        ['link'],                                 // Hyperlien
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }], // Listes
                        ['clean']                                 // Supprimer le formatage
                    ]
                },
                placeholder: 'Écrivez le contenu de l\'actualité...'
            });
            
            // Restaurer l'ancien contenu si présent (validation échouée)
            const oldContent = `<?php echo e(old('contenu')); ?>`;
            if (oldContent) {
                quill.root.innerHTML = oldContent;
            }
        }
    });
    
    // Transférer le contenu de Quill vers le champ caché avant soumission
    document.getElementById('form_actualite')?.addEventListener('submit', function(e) {
        const contenuHidden = document.getElementById('contenu-hidden');
        contenuHidden.value = quill.root.innerHTML;
        
        // Validation : vérifier que le contenu n'est pas vide
        if (quill.getText().trim().length === 0) {
            e.preventDefault();
            alert('Le contenu est obligatoire');
            return false;
        }
    });
</script>

    </main>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac-main (2)\apeeac-main\resources\views/pages/accueil.blade.php ENDPATH**/ ?>