<h1>Detalji posudbe</h1>
<p>Član: {{ $posudba->clan->ime }} {{ $posudba->clan->prezime }}</p>
<p>Knjiga: {{ $posudba->knjiga->naslov }}</p>
<p>Datum posudbe: {{ $posudba->datum_posudbe }}</p>
<p>Datum vracanja: {{ $posudba->datum_vracanja ?? "Knjiga nije vraćena"}}</p>

<a href="{{ route('posudbe.edit', $posudba->id) }}">Uredi</a>
<form action="{{ route('posudbe.destroy', $posudba->id) }}">
    @csrf
    @method("DELETE")
    <button type="submit">Izbriši</button>
</form>