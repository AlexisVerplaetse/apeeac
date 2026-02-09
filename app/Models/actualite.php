<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $table = 'actualites';

    protected $fillable = [
        'titre',
        'contenu',
        'date_publication',
        'image',
        'archive_id',
    ];

    // Relation vers l'année/Archive
    public function archive()
    {
        return $this->belongsTo(Archive::class);
    }
}
