@extends('layouts.default')

@section('title', 'Kalender')

@section('content')
    <h2>Kalender 2023-2024</h2>
    <form action="{{ route('wedstrijden.kalender.store') }}" method="POST">
        @csrf

        <!-- Invoervelden -->
        <div class="form-group">
            <label for="date">Datum:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="startuur">Startuur:</label>
            <input type="time" name="startuur" id="startuur" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="thuisploeg">Thuisploeg:</label>
            <input type="text" name="thuisploeg" id="thuisploeg" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="uitploeg">Uitploeg:</label>
            <input type="text" name="uitploeg" id="uitploeg" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="uitslag">Uitslag:</label>
            <input type="text" name="uitslag" id="uitslag" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="verslag_path">Verslag (optioneel):</label>
            <input type="url" name="verslag_path" id="verslag_path" class="form-control">
        </div>

        <!-- Knop om het formulier in te dienen -->
        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
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
                        <td>{{ $kalender->date }}</td>
                        <td>{{ $kalender->startuur }}</td>
                        <td>{{ $kalender->thuisploeg }}</td>
                        <td>{{ $kalender->uitploeg }}</td>
                        <td>{{ $kalender->uitslag }}</td>
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
