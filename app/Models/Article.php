<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'date', 'full_date', 'description'];

    public static $rules = [
        'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Pas de maximale bestandsgrootte aan indien nodig
        'date' => 'required|date',
        'full_date' => 'required|date',
        'description' => 'required|string',
    ];
}
