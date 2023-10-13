{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body, h1, p, button {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .product {
            text-align: left;
            padding: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .price {
            font-size: 18px;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .description {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        .add-to-cart {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-to-cart:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>
    @foreach ($products as $product)
    <div class="container">
        <div class="product">
            <h1>Sample Product</h1>
            <p class="price">Price: {{ $product['price'] }}</p>
            <p class="description">{{ $product['name'] }}</p>
            <button class="add-to-cart">Add to Cart</button>

            <p class="name">Name: {{ $product['name'] }}</p>
            <p class="brand">Brand: {{ $product['brand'] }}</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
    </br>
    @endforeach
</body>
</html>
 --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>

    @foreach ($products as $product)
        <p class="name">Name: {{ $product['name'] }}</p>
        <p class="brand">Brand: {{ $product['brand'] }}</p>
        <button class="add-to-cart">Add to Cart</button>
        
        @if ($product['name'] === $requestedName && $product['brand'] === $requestedBrand)
            <div>
                <h2>{{ $product['name'] }} - {{ $product['brand'] }}</h2>
                <p>Price: {{ $product['price'] }}</p>
            </div>
        @endif
    @endforeach

    @if (!isset($requestedName) || !isset($requestedBrand))
        <p>Please provide valid product name and brand in the URL.</p>
    @endif
</body>
</html>

