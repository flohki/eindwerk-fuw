<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo-kvvhz.png') }}" alt="KVV Heusden-Zolder">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('club') }}">Club</a></li>
                {{-- info, terreinen, feestzaal, contact moet als onderverdeling bij club --}}
                <li><a href="{{ route('nieuws') }}">Nieuws</a></li>
                <li><a href="{{ route('wedstrijden') }}">Wedstrijden</a></li>
                {{-- kalender, klassement, reserven, tegenstanders moet als onderverdeling hier nog bij --}}
                <li><a href="{{ route('media') }}">Multimedia</a></li>
            </ul>
        </nav>
    </div>
</header>
