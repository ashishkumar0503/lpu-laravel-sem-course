<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        table {
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Product Details</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Desc</th>
            <th>Price</th>
        </tr>
        
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['desc'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
