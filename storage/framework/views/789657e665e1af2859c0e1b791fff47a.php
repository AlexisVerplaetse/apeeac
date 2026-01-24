

<?php $__env->startSection('title', 'Déposer une annonce de vente'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Hero Section -->
    <section class="hero">
        <h1>💰 Déposer une annonce de vente</h1>
        <p>Vendez votre instrument ou accessoire musical</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Bouton retour -->
        <div class="back-button">
            <a href="<?php echo e(route('petites-annonces.vente')); ?>" class="btn-back">← Retour aux annonces</a>
        </div>

        <!-- Formulaire de dépôt -->
        <section class="form-section">
            <div class="form-container">
                <h2 class="section-title">Informations sur l'annonce</h2>
                
                <form action="<?php echo e(route('petites-annonces.vente.store')); ?>" method="POST" enctype="multipart/form-data" class="annonce-form">
                    <?php echo csrf_field(); ?>
                    
                    <!-- Type d'annonce (caché car on est sur vente) -->
                    <input type="hidden" name="type" value="vente">

                    <!-- Catégorie -->
                    <div class="form-group">
                        <label for="categorie">Catégorie *</label>
                        <select id="categorie" name="categorie" required>
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="instruments-cordes">Instruments à cordes</option>
                            <option value="instruments-vent">Instruments à vent</option>
                            <option value="instruments-clavier">Instruments à clavier</option>
                            <option value="instruments-percussion">Instruments de percussion</option>
                            <option value="partitions">Partitions</option>
                            <option value="accessoires">Accessoires</option>
                            <option value="autres">Autres</option>
                        </select>
                    </div>

                    <!-- Titre de l'annonce -->
                    <div class="form-group">
                        <label for="titre">Titre de l'annonce *</label>
                        <input type="text" id="titre" name="titre" placeholder="Ex: Violon 4/4 - Excellent état" maxlength="100" required>
                        <small>Maximum 100 caractères</small>
                    </div>

                    <!-- Prix -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="prix">Prix (en €) *</label>
                            <input type="number" id="prix" name="prix" placeholder="450" min="0" step="1" required>
                        </div>
                        <div class="form-group">
                            <label for="negociable">
                                <input type="checkbox" id="negociable" name="negociable" value="1">
                                Prix négociable
                            </label>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description *</label>
                        <textarea id="description" name="description" rows="6" placeholder="Décrivez votre article : état, marque, année d'achat, accessoires inclus, raison de la vente..." required></textarea>
                        <small>Soyez précis pour faciliter la vente</small>
                    </div>

                    <!-- État -->
                    <div class="form-group">
                        <label for="etat">État *</label>
                        <select id="etat" name="etat" required>
                            <option value="">Sélectionnez l'état</option>
                            <option value="neuf">Neuf (jamais utilisé)</option>
                            <option value="excellent">Excellent état</option>
                            <option value="tres-bon">Très bon état</option>
                            <option value="bon">Bon état</option>
                            <option value="usage">État d'usage</option>
                        </select>
                    </div>

                    <!-- Photos -->
                    <div class="form-group">
                        <label for="photos">Photos (optionnel)</label>
                        <input type="file" id="photos" name="photos[]" accept="image/*" multiple>
                        <small>Vous pouvez ajouter jusqu'à 5 photos (JPG, PNG - Max 5Mo par photo)</small>
                    </div>

                    <!-- Localisation -->
                    <div class="form-group">
                        <label for="localisation">Localisation *</label>
                        <input type="text" id="localisation" name="localisation" placeholder="Ex: Paris 15ème" required>
                        <small>Ville ou arrondissement</small>
                    </div>

                    <!-- Informations de contact -->
                    <div class="contact-section">
                        <h3>Informations de contact</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">Nom *</label>
                                <input type="text" id="nom" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="tel" id="telephone" name="telephone" placeholder="06 12 34 56 78">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="afficher_telephone" value="1">
                                Afficher mon numéro de téléphone dans l'annonce
                            </label>
                        </div>
                    </div>

                    <!-- Conditions -->
                    <div class="form-group conditions">
                        <label>
                            <input type="checkbox" name="accepte_conditions" required>
                            J'accepte les <a href="#" target="_blank">conditions d'utilisation</a> et certifie être adhérent de l'APEEAC *
                        </label>
                    </div>

                    <!-- Boutons -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-submit">
                            <span>✓</span> Publier l'annonce
                        </button>
                        <a href="<?php echo e(route('petites-annonces.vente')); ?>" class="btn btn-cancel">Annuler</a>
                    </div>
                </form>
            </div>

            <!-- Conseils -->
            <aside class="conseils-sidebar">
                <div class="conseil-card">
                    <h3>💡 Conseils pour une bonne annonce</h3>
                    <ul>
                        <li>✓ Choisissez un titre clair et précis</li>
                        <li>✓ Indiquez la marque et le modèle</li>
                        <li>✓ Décrivez l'état réel de l'instrument</li>
                        <li>✓ Ajoutez des photos de qualité</li>
                        <li>✓ Fixez un prix juste et réaliste</li>
                        <li>✓ Répondez rapidement aux messages</li>
                    </ul>
                </div>

                <div class="conseil-card">
                    <h3>⚠️ Attention</h3>
                    <p>L'APEEAC n'est pas responsable des transactions entre particuliers. Soyez prudent et privilégiez les rencontres en lieu public.</p>
                </div>
            </aside>
        </section>

    </div
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apeeac14\apeeac-main\resources\views/pages/petites-annonces-vente-depot.blade.php ENDPATH**/ ?>