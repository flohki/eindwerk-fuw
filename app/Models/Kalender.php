<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    use HasFactory;
    protected $fillable = [
        'datum',
        'uur_start',
        'thuisploeg',
        'uitploeg',
        'stand_na_einde',
        'verslag'
    ];
}
