<form action="{{ route('add-data') }}" method="POST">
    @csrf
    <!-- Inputvelden voor elk model -->
    <label for="name">Gebruikersnaam:</label>
    <input type="text" id="name" name="name">
    <label for="password">wachtwoord:</label>
    <input type="text" id="password" name="password">

    <!-- Voeg hier inputvelden toe voor andere tabellen -->

    <button type="submit">Toevoegen</button>
</form>
