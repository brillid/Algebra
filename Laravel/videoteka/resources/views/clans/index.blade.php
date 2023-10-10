<a href="{{route('clans.create')}}">Dodaj novog člana</a>
<br>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Članski broj</th>
            <th>Datum upisa</th>
            <th>AKCIJA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clans as $clan)
            <tr>
                <td>{{$clan->id}}</td>
                <td>{{$clan->ime}}</td>
                <td>{{$clan->prezime}}</td>
                <td>{{$clan->clanski_broj}}</td>
                <td>{{$clan->created_at}}</td>
                <td>
                    <a href="{{route('clans.show', $clan->id)}}">Prikaži</a>
                    <a href="{{route('clans.edit', $clan->id)}}">Uredi</a>
                    <form action="{{ route('clans.destroy', $clan->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Izbriši</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
