<a href="{{route('films.create')}}">Dodaj novi film</a>
<br>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Redatelj</th>
            <th>Godina izdanja</th>
            <th>AKCIJA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($films as $film)
            <tr>
                <td>{{$film->id}}</td>
                <td>{{$film->naslov}}</td>
                <td>{{$film->redatelj}}</td>
                <td>{{$film->godina_izdanja}}</td>
                <td>
                    <a href="{{route('films.show', $film->id)}}">Prikaži</a>
                    <a href="{{route('films.edit', $film->id)}}">Uredi</a>
                    <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Izbriši</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
