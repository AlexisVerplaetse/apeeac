<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PetiteAnnonce extends Model
{
    use HasFactory;

    /**
     * Le nom de la table dans la base de données
     */
    protected $table = 'petites_annonces';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'titre',
        'description',
        'categorie',
        'prix',
        'negociable',
        'etat',
        'localisation',
        'budget_min',
        'budget_max',
        'etat_souhaite',
        'urgence',
        'zone_geographique',
        'point_depart',
        'point_arrivee',
        'trajet_retour',
        'frequence',
        'jours',
        'heure_depart',
        'heure_retour',
        'places_disponibles',
        'participation',
        'enfants_acceptes',
        'instruments_volumineux',
        'nom',
        'prenom',
        'email',
        'telephone',
        'afficher_telephone',
        'statut',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'jours' => 'array',
        'negociable' => 'boolean',
        'trajet_retour' => 'boolean',
        'afficher_telephone' => 'boolean',
        'enfants_acceptes' => 'boolean',
        'instruments_volumineux' => 'boolean',
        'prix' => 'decimal:2',
        'budget_min' => 'decimal:2',
        'budget_max' => 'decimal:2',
        'participation' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope pour filtrer les annonces actives
     */
    public function scopeActive($query)
    {
        return $query->where('statut', 'active');
    }

    /**
     * Scope pour filtrer par type
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Récupérer l'emoji selon la catégorie
     */
    public function getEmojiAttribute()
    {
        $emojis = [
            'instruments-cordes' => '🎻',
            'instruments-vent' => '🎺',
            'instruments-clavier' => '🎹',
            'instruments-percussion' => '🥁',
            'partitions' => '🎼',
            'accessoires' => '🎸',
            'autres' => '🎵',
        ];

        return $emojis[$this->categorie] ?? '🎵';
    }

    /**
     * Récupérer la date formatée
     */
    public function getDateFormatteeAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    /**
     * Récupérer les jours sous forme de texte
     */
    public function getJoursTexteAttribute()
    {
        if (!$this->jours || !is_array($this->jours)) {
            return '';
        }

        return implode(', ', array_map('ucfirst', $this->jours));
    }

    /**
     * Vérifier si l'annonce est expirée (plus de 3 mois)
     */
    public function estExpiree()
    {
        return $this->created_at->addMonths(3)->isPast();
    }

    /**
     * Marquer l'annonce comme expirée
     */
    public function marquerExpiree()
    {
        $this->update(['statut' => 'expirée']);
    }

    /**
     * Supprimer l'annonce (soft delete via statut)
     */
    public function supprimerAnnonce()
    {
        $this->update(['statut' => 'supprimée']);
    }
}