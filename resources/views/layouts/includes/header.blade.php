<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<header>
    <div class="logo">
        <img src="{{ asset('images/logo-kvvhz.png') }}" alt="KVV Heusden-Zolder">
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="dropdown">
                <a href="{{ route('club') }}">Club</a>
                <div class="dropdown-content">
                    <a href="{{ route('club.info') }}">Info</a>
                    <a href="{{ route('club.terreinen') }}">Terreinen</a>
                    <a href="{{ route('club.feestzaal') }}">Feestzaal</a>
                    <a href="{{ route('club.contact') }}">Contact</a>
                </div>
            </li>
            <li><a href="{{ route('nieuws') }}">Nieuws</a></li>
            <li class="dropdown">
                <a href="{{ route('wedstrijden') }}">Wedstrijden</a>
                <div class="dropdown-content">
                    <a href="{{ route('wedstrijden.kalender') }}">Kalender</a>
                    <a href="{{ route('wedstrijden.klassement') }}">Klassement</a>
                    <a href="{{ route('wedstrijden.reserven') }}">Reserven</a>
                    <a href="{{ route('wedstrijden.reserven') }}">Tegenstanders</a>
                </div>
            </li>
            <li><a href="{{ route('media') }}">Multimedia</a></li>
        </ul>
    </nav>
</header>
