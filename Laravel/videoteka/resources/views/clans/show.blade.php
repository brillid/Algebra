<h2>{{ $clan->ime}} {{ $clan->prezime }}</h2>
<h3>Članski broj: {{ $clan->clanski_broj }}</h3>
<h4>Član od: {{ $clan->created_at }}</h4>

<a href="{{ route('clans.edit', $clan->id) }}">UREDI</a><br><br>
<form action="{{ route('clans.destroy', $clan->id) }}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Izbriši</button>
</form>
