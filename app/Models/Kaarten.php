<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaarten extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam_speler',
        'gele_kaart',
        'rode_kaart'
    ];
}