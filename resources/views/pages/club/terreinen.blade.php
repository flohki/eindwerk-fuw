<link rel="stylesheet" type="text/css" href="{{ asset('css/club/terreinen.css') }}">
@extends('layouts.default')

@section('title', 'Terreinen')

@section('content')
    <div class="container">
        <div class="terreinen-box">
            <h2>Complex De Nieuwe Dijk</h2>
            <div>
                <a href="#">De Nieuwe Dijk 35 3550 Heusden-Zolder</a>
            </div>
            <div>
                <img src="{{ asset('images/kantine-wedstrijd.png') }}" alt="KVV Heusden-Zolder kantine">
            </div>
        </div>
        <div class="terreinen-box">
            <div>
                <p>Bloknummer: 2048</p>
                <p>Telefoon: 011 57 29 67</p>
            </div>
            <div>
                <img src="{{ asset('images/inkom-terrein.png') }}" alt="KVV Heusden-Zolder kantine">
            </div>
        </div>
    </div>
@endsection
