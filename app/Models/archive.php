<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class archive extends Model
{
    protected $table = 'archive';

    protected $fillable = [
        'annee',
    ];
}
