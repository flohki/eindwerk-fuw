<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedstrijdstand extends Model
{
    use HasFactory;
    protected $fillable = [
        'datum',
        'thuisploeg',
        'uitploeg',
        'stand_na_einde',
        'verslag'
    ];
}