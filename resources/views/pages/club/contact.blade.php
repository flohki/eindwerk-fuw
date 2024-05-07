<link rel="stylesheet" type="text/css" href="{{ asset('css/club/contact.css') }}">
@extends('layouts.default')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="contact-box">
            <form method="post" action="">
                <div>
                    <label for="telefoonnummer">Telefoonnummer:</label>
                    <input type="text" name="telefoonnummer">
                </div>
                <div>
                    <label for="onderwerp">Onderwerp:</label>
                    <select name="onderwerp" id="">
                        <option value="">Aanvraag</option>
                        <option value="">Voorstel</option>
                        <option value="">Inlichtingen</option>
                        <option value="">Andere</option>
                    </select>
                </div>
                <div>
                    <label for="bericht">Bericht:</label>
                    <textarea name="bericht" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="verificatie">Verificatie:</label>
                    <p>reCAPTCHA</p>
                </div>
                <button>Versturen</button>
            </form>
        </div>
        <div class="contact-box">
            <div>
                <p>Wilt u een aanvraag doen, hebt u misschien een voorstel voor onze club, wenst u verdere inlichtingen over
                    ons, of eventueel iets anders dat u met ons wil delen ....</p>
                <p>gebruik dan het contactformulier.</p>
                <p>Natuurlijk kunt u ons ook eventueel contacteren via telefoon of gewone mail:</p>
            </div>
            <div>
                <p>Contactpersoon:</p>
                <p>Jeuris Mathieu</p>
                <p>De Rieten 22</p>
            </div>
            <div>
                <p>GSM: 0473/70 98 88</p>
                <p>E-mail: Jeuris Mathieu</p>
            </div>
        </div>

    </div>
@endsection
