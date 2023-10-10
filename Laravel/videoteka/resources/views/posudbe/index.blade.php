//prikaz svih posudbi
<h1>Lista posudbi</h1>
<a href="{{ route('posudbe.create') }}">Posudi knjigu</a>
<br>
<table border="1">
    <thead>
        <tr>
            <th>Član</th>
            <th>Film</th>
            <th>Datum posudbe</th>
            <th>Datum vračanja</th>
            <th>Akcija</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posudbe as $posudba)
        <tr>
            <td>{{ $posudba->clan->ime }} {{ $posudba->clan->prezime }}</td>
            <td>{{ $posudba->film->naslov }}</td>
            <td>{{ $posudba->datum_posudbe }}</td>
            <td>{{ $posudba->datum_vraćanja ?? 'Nije još vraćeno'}}</td>
            <td>
                <a href="{{ route('posudbe.show', $posudba->id) }}">Prikaži</a>
                <a href="{{ route('posudbe.edit', $posudba->id) }}">Uredi</a>
                <form action="{{  }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Izbriši</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>