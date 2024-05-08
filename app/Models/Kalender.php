<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    use HasFactory;

    protected $table = 'kalender';

    protected $fillable = [
        'date',
        'startuur',
        'thuisploeg',
        'uitploeg',
        'uitslag',
        'verslag_path'
    ];
    protected $casts = [
        'uitslag' => 'string', // Hiermee geef je aan dat 'uitslag' als een string moet worden gecast
    ];
}
