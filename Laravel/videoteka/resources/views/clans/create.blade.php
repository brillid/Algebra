<form action="{{ route('clans.store') }}" method="POST">
    @csrf
    <label>Ime</label>
    <input type="text" name="ime" required><br>

    <label>Prezime</label>
    <input type="text" name="prezime" required><br>

    <label>Članski broj</label>
    <input type="text" name="clanski_broj" required><br>

    <button type="submit">Kreiraj</button>
</form>