<html>
<head>
    <title>Alle Produkte</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Preis</th>
            <th>Details</th>
        </tr>
        <tr>
            <td><img src="{{ $product->image }}"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->Details }}</td>
        </tr>
    </table>
    <a href="/products">Zurück zur Produktübersicht</a>
</body>
</html>