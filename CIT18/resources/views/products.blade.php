<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
<h1>Favorite Anime</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['title'] }}</li>
        @endforeach
    </ul>
</body>
</html>