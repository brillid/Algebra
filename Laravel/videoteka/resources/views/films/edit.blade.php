<form action="{{ route('films.update', $film->id) }}" method="POST">
    @csrf
    @method("PUT")
    <label>Naziv</label>
    <input type="text" name="naziv" value="{{ $film->naziv }}" required><br>

    <label>Redatelj</label>
    <input type="text" name="redatelj" value="{{ $film->redatelj }}" equired><br>

    <label>Godina izdanja</label>
    <input type="text" name="godina_izdanja" value="{{ $film->godina_izdanja }}" required><br>

    <button type="submit">Kreiraj</button>
</form>