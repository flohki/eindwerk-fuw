<link rel="stylesheet" type="text/css" href="{{ asset('css/club/info.css') }}">
@extends('layouts.default')

@section('title', 'Info')

@section('content')
    <div class="container">
        <div class="info-box">
            <div>
                <p>Clubnaam</p>
                <p>K.V.V. Heusden-Zolder</p>
                <p>Stamnummer: 5894</p>
                <p>Bloknummer: 2048</p>
            </div>
            <div>
                <p>Adres:</p>
                <a href="#">De Nieuwe Dijk 35 3550 Heusden-Zolder</a>
            </div>
            <div>
                <p>Ondernemingsnummer:</p>
                <p>412 097 669</p>
            </div>
            <div>
                <p>Clubkleuren:</p>
                <p>Geel-Groen</p>
            </div>
        </div>
        <div class="info-box">
            <img src="{{ asset('images/logo-kvvhz.png') }}" alt="KVV Heusden-Zolder">
        </div>
        <div class="info-box">
            <div>
                <h2>Contactpersonen</h2>
                <h3>Gerechtigd Correspondent</h3>
            </div>
            <div>
                <p>Naam:</p>
                <p>Jeuris Mathieu</p>
            </div>
            <div>
                <p>Adres</p>
                <p>De Rieten 22</p>
                <p>3550 Heusden-Zolder</p>
            </div>
            <div>
                <p>Telefoon:</p>
                <p>0473/70 98 88</p>
            </div>
            <div>
                <p>E-mail:</p>
                <a href="#">Jeuris Mathieu</a>
            </div>
            <div>
                <h3>Voorzitter</h3>
                <p>Naam:</p>
                <p>Maris Veerle</p>
            </div>
        </div>

    @endsection
