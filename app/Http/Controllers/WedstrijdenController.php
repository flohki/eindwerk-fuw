<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WedstrijdenController extends Controller
{
    public function index()
    {
        return view('pages.wedstrijden.wedstrijden');
    }

    public function kalender()
    {
        return view('pages.wedstrijden.kalender');
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
