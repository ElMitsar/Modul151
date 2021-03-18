<table>
    <tr>
        <th>Name</th>
        <th>Preis</th>
        <th>Anzahl</th>
        <th>Bild</th>
        <th>Detailbeschreibung</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->picture }}</td>
            <td>{{ $product->description }}</td>
        </tr>
    @endforeach
</table>