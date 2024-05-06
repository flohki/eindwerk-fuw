<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klassement extends Model
{
    protected $fillable = [
                'ploegnaam',
                'aantal_matchen_gespeeld',
                'gewonnen',
                'verloren',
                'gelijkspel',
                'doelpunten_voor',
                'doelpunten_tegen',
                'doelpunten_verschil',
                'punten_behaald'
            ];
    use HasFactory;
}