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

    public function kalender(Request $request)
    {
        if ($request->isMethod('post')){
            $validatedData = $request->validate([
                'date' => 'required|date',
                'startuur' => 'required|time',
                'thuisploeg' => 'required|string',
                'uitploeg' => 'required|string',
                'uitslag' => 'required|string',
                'verslag_path' => 'nullable|url', // Als het verslag optioneel is en een URL moet zijn
            ]);
            Kalender::create($validatedData);
        }
        $kalenders = Kalender::all();

        // Geef de kalendergegevens door aan de weergave
        return view('pages.wedstrijden.kalender', ['kalenders' => $kalenders]);
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
