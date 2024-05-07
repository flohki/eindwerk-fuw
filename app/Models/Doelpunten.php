<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doelpunten extends Model
{
    protected $fillable = [
                'naam_speler',
                'totaal_aantal_doelpunten'
            ];
    use HasFactory;
}