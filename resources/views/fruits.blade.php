<!DOCTYPE html>
<html>
<head>
    <title>Fruits List</title>
</head>
<body>
    <h1>Fruits List</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
        @foreach ($fruits as $fruit)
            <tr>
                <td>{{ $fruit['name'] }}</td>
                <td>{{ $fruit['price'] }}</td>
            </tr>
        @endforeach
    </table>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit['name'] }} - {{ $fruit['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>
