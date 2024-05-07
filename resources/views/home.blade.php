<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <section class="slider">
        <!-- Afbeeldingencarrousel hier -->
    </section>

    <section class="news-update">
        <div class="container">
            <h2>Laatste Nieuws</h2>
            <div class="news">
                <!-- Laatste nieuwsberichten hier -->
            </div>
        </div>
    </section>

    <section class="about-club">
        <div class="container">
            <div>
                <h2>Over onze Club</h2>
            </div>
            <div>
                <p>KVV Heusden-Zolder, is een voetbalclub die diep geworteld is in de gemeenschap van
                    Heusden-Zolder, Limburg, België. De club, met zijn sterke jeugdopleiding en diverse seniorprogramma,
                    staat
                    bekend om zijn sportiviteit en gemeenschapsbetrokkenheid. Door voetbal te combineren met sociale
                    evenementen
                    en liefdadigheidsinitiatieven, vervult KVV Heusden-Zolder een centrale rol in het lokale
                    gemeenschapsleven,
                    waar passie voor de sport samensmelt met verbondenheid en trots.</p>
            </div>
        </div>
    </section>

    <section class="teams">
        <div class="container">
            <h2>Teams</h2>
            <div class="team-list">
                <!-- Lijst van teams hier -->
            </div>
        </div>
    </section>

    <section class="matches">
        <div class="container">
            <h2>Wedstrijden</h2>
            <div class="match-calendar">
                <!-- Wedstrijdkalender hier -->
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <h2>Nieuwsberichten</h2>
            <div class="news-articles">
                <!-- Gedetailleerde nieuwsberichten hier -->
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contact</h2>
            <p>Contactgegevens van de club hier.</p>
        </div>
    </section>
@endsection
