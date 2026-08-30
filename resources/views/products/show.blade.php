<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $product['name']}} </title>
</head>
<body>
    <h1>{{ $product['name']}}</h1>
    <table border="1" cellpadding="8">
    <p>Price: {{ $product['price']}}</p>
    <p>Stock: {{ $product['stock']}}</p>
    <p>Category: {{ $product['category']}}</p>
    <p>Prepared by: Francis Alkier Ubalde</p>

    <a href="{{ route('products.index')}}">Back to Product List</a>
    </table>
</body>
</html>
