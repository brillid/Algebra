<form action="{{ route('films.store') }}" method="POST">
    @csrf
    <label>Naziv</label>
    <input type="text" name="naziv" required><br>

    <label>Redatelj</label>
    <input type="text" name="redatelj" required><br>

    <label>Godina izdanja</label>
    <input type="text" name="godina_izdanja" required><br>

    <button type="submit">Kreiraj</button>
</form>