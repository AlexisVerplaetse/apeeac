<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('petites_annonces', function (Blueprint $table) {
            $table->id();
            
            // Type d'annonce
            $table->enum('type', ['vente', 'recherche', 'covoiturage']);
            
            // Informations communes
            $table->string('titre');
            $table->text('description')->nullable();
            
            // Pour les annonces de vente
            $table->string('categorie')->nullable();
            $table->decimal('prix', 10, 2)->nullable();
            $table->boolean('negociable')->default(false);
            $table->string('etat')->nullable();
            $table->string('localisation')->nullable();
            
            // Pour les demandes de recherche
            $table->decimal('budget_min', 10, 2)->nullable();
            $table->decimal('budget_max', 10, 2)->nullable();
            $table->string('etat_souhaite')->nullable();
            $table->string('urgence')->nullable();
            $table->string('zone_geographique')->nullable();
            
            // Pour le covoiturage
            $table->string('point_depart')->nullable();
            $table->string('point_arrivee')->nullable();
            $table->boolean('trajet_retour')->default(false);
            $table->string('frequence')->nullable();
            $table->json('jours')->nullable();
            $table->time('heure_depart')->nullable();
            $table->time('heure_retour')->nullable();
            $table->integer('places_disponibles')->nullable();
            $table->decimal('participation', 10, 2)->nullable();
            $table->boolean('enfants_acceptes')->default(false);
            $table->boolean('instruments_volumineux')->default(false);
            
            // Informations de contact
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->boolean('afficher_telephone')->default(false);
            
            // Statut
            $table->enum('statut', ['active', 'expirée', 'supprimée'])->default('active');
            
            $table->timestamps();
            
            // Index pour améliorer les performances
            $table->index('type');
            $table->index('statut');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petites_annonces');
    }
};