<h1>Uredi posudbu</h1>
<form action="{{ route('posudbe.update', $posudba->id) }}" method="POST">
    @csrf
    @method("PUT")

    <label>Član</label>
    <select name="id_clan" required>
        @foreach ($clanovi as $clan)
            <option value="{{ $clan->id }}" {{ $clan->id == $posudba->id_clan ? 'selected' : '' }} > {{ $clan->ime }} {{ $clan->prezime }}</option>
        @endforeach
    </select>

    <br>

    <label>Knjiga</label>
    <select name="id_film" required>
        @foreach ($filmovi as $film)
            <option value="{{ $film->id }}" {{ $film->id == $$posudba->id_film ? 'selected' : '' }} > {{ $knjiga->naslov }}</option>
        @endforeach
    </select>

    <br>

    <label>Datum posudbe</label>
    <input type="date" name="datum_posudbe" value="{{ $posudba->datum_pusdbe }}" required>

    <br>

    <label>Datum vraćanja</label>
    <input type="date" name="datum_vracanja" value="{{ $posudba->datum_vracanja }}">

    <br>

    <button type="submit">Posudi</button>
</form>