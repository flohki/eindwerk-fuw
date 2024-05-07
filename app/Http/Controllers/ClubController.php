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
        return view('pages.club.info');
    }

    public function terreinen()
    {
        return view('pages.club.terreinen');
    }

    public function feestzaal()
    {
        return view('pages.club.feestzaal');
    }

    public function contact()
    {
        return view('pages.club.contact');
    }
}