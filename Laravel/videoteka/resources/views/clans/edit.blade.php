<form action="{{ route('clans.update', $clan->id) }}" method="POST">
    @csrf
    @method("PUT")
    <label>Ime</label>
    <input type="text" name="ime" value="{{ $clan->ime }}" required><br>

    <label>Prezime</label>
    <input type="text" name="prezime" value="{{ $clan->prezime }}" equired><br>

    <label>Članski broj</label>
    <input type="text" name="clanski_broj" value="{{ $clan->clanski_broj }}" required><br>

    <button type="submit">Kreiraj</button>
</form>