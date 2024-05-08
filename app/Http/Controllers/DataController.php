<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Klassement;
use App\Models\Doelpunten;
use App\Models\Kaarten;
use App\Models\Wedstrijdstand;
use App\Models\Kalender;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showForm()
    {
        return view('add-data');
    }

    public function addData(Request $request)
    {
       // Valideer de invoer (optioneel)
    $request->validate([
        'name' => 'required|string',
        // Voeg hier validatieregels toe voor andere velden
    ]);

    // Voeg een nieuwe gebruiker toe
    User::create([
        'name' => $request->input('name'),
        'password' => bcrypt($request->input('password')), // Voorbeeld van wachtwoordhashen
    ]);

    // Voeg een nieuw klassement toe
    Klassement::create([
        'ploegnaam' => $request->input('ploegnaam'),
        'aantal_matchen_gespeeld' => $request->input('aantal_matchen_gespeeld'),
        // Voeg hier andere velden toe
    ]);

    // Voeg een nieuw doelpunt toe
    Doelpunten::create([
        'naam_speler' => $request->input('speler_naam'),
        'totaal_aantal_doelpunten' => $request->input('aantal_doelpunten'),
    ]);

    // Voeg een nieuwe kaart toe
    Kaarten::create([
        'naam_speler' => $request->input('speler_naam'),
        'gele_kaart' => $request->input('gele_kaart'),
        'rode_kaart' => $request->input('rode_kaart'),
    ]);

    // Voeg een nieuwe wedstrijdstand toe
    Wedstrijdstand::create([
        'datum' => $request->input('datum'),
        'thuisploeg' => $request->input('thuisploeg'),
        'uitploeg' => $request->input('uitploeg'),
        'stand_na_einde' => $request->input('stand_na_einde'),
        'verslag' => $request->input('verslag'),
    ]);

    // Voeg een nieuwe kalender toe
    Kalender::create([
        'date' => $request->input('date'),
        'startuur' => $request->input('startuur'),
        'thuisploeg' => $request->input('thuisploeg'),
        'uitploeg' => $request->input('uitploeg'),
        'uitslag' => $request->input('uitslag'),
        'verslag_path' => $request->input('verslag_path'),
    ]);

    // Redirect naar een succesvolle pagina of een andere route
    return redirect()->route('add-data.form')->with('success', 'Gegevens succesvol toegevoegd!');
    }
}
