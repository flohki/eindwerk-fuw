<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use Illuminate\Http\Request;

class WedstrijdenController extends Controller
{
    public function index()
    {
        return view('pages.wedstrijden.wedstrijden');
    }

    public function kalender()
    {
        $kalender = Kalender::all();

        // Geef de kalendergegevens door aan de weergave
        return view('pages.wedstrijden.kalender', ['kalender' => $kalender]);
    }

    public function klassement()
    {
        return view('pages.wedstrijden.klassement');
    }

    public function reserven()
    {
        return view('pages.wedstrijden.reserven');
    }

    public function tegenstanders()
    {
        return view('pages.wedstrijden.tegenstanders');
    }
}
