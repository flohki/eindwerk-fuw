<link rel="stylesheet" type="text/css" href="{{ asset('css/club/feestzaal.css') }}">
@extends('layouts.default')

@section('title', 'Feestzaal')

@section('content')
    <div class="container">
        <div class="feestzaal-box">
            <img src="{{ asset('images/feestzaal.png') }}" alt="KVV Heusden-Zolder Feestzaal">
        </div>
        <div class="feestzaal-box">
            <div>
                <h2>Contactpersoon</h2>
                <h3>Voor meer info</h3>
            </div>
            <div>
                <p>Naam:</p>
                <p>Jeuris Mathieu</p>
            </div>
            <div>
                <p>Adres:</p>
                <p>De Rieten 22</p>
                <p>3550 Heusden-Zolder</p>
            </div>
            <div>
                <p>Telefoon</p>
                <p>011/57 27 01</p>
                <p>GSM:</p>
                <p>0473/70 98 88</p>
            </div>
            <div>
                <p>E-mail:</p>
                <a href="#">Jeuris Mathieu</a>
            </div>
            <div>
                <p>Grote zaal voor maximum 320 personen</p>
                <p>Keuken + materiaal beschikbaar</p>
            </div>

        </div>
    </div>
@endsection
