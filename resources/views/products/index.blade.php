<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store Product List</title>
</head>
<body>
    <h1>My Product List</h1>
    <p>Prepared by: Francis Alkier Ubalde</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
 
        @foreach ($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product['id']) }}"> {{ $product['name'] }}</a></td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['stock'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>