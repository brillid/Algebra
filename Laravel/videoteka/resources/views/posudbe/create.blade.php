<h1>Posudi film</h1>
<form action="{{ route('posudbe.store') }}" method="POST">
    @csrf
    @method("PUT")
    <label>Član</label>
    <select name="id_clan" required>
        @foreach ($clanovi as $clan)
            <option value="{{ $clan->id }}">{{ $clan->ime }} {{ $clan->prezime }}</option>
        @endforeach
    </select>

    <br>

    <label>Knjiga</label>
    <select name="id_film" required>
        @foreach ($filmovi as $film)
            <option value="{{ $film->id }}">{{ $film->naziv }}</option>
        @endforeach
    </select>

    <br>

    <label>Datum posudbe</label>
    <input type="date" name="datum_posudbe" required>

    <br>

    <button type="submit">Posudi</button>
</form>