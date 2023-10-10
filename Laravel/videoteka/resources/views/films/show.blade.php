<h2>{{ $film->naziv}} {{ $film->redatelj }}</h2>
<h3>Godina izdanja: {{ $film->godina_izdanja }}</h3>

<a href="{{ route('films.edit', $film->id) }}">UREDI</a><br><br>
<form action="{{ route('films.destroy', $film->id) }}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Izbriši</button>
</form>
