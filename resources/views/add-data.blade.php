<form action="{{ route('add-data') }}" method="POST">
    @csrf
    <!-- Inputvelden voor elk model -->
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username">

    <!-- Voeg hier inputvelden toe voor andere tabellen -->

    <button type="submit">Toevoegen</button>
</form>
