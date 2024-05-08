@extends('layouts.default')

@section('title', 'Kalender')

@section('content')
    <h2>Kalender 2023-2024</h2>
    <div style="overflow-x:auto;">
        <table width="100%" class="table tabelstats2 table-striped">
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>Startuur</th>
                    <th>Thuisploeg</th>
                    <th>Uitploeg</th>
                    <th>Uitslag</th>
                    <th>Verslag</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kalenders as $kalender)
                    <tr>
                        <td>{{ $kalender->datum }}</td>
                        <td>{{ $kalender->uur_start }}</td>
                        <td>{{ $kalender->thuisploeg }}</td>
                        <td>{{ $kalender->uitploeg }}</td>
                        <td>{{ $kalender->stand_na_einde }}</td>
                        <td>
                            @if ($kalender->verslag)
                                <a href="{{ $kalender->verslag_path }}">Verslag</a>
                            @else
                                Geen verslag beschikbaar
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
