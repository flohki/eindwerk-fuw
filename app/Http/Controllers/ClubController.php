<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        return view('pages.club.club');
    }

    public function info()
    {
        return view('club.info');
    }

    public function terreinen()
    {
        return view('club.terreinen');
    }

    public function feestzaal()
    {
        return view('club.feestzaal');
    }

    public function contact()
    {
        return view('club.contact');
    }
}
