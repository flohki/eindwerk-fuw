<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WedstrijdenController extends Controller
{
    public function index()
    {
        return view('pages.wedstrijden.wedstrijden');
    }
}
