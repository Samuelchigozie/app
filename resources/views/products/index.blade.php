<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
</head>
<body>
    <h1>Products List</h1>
    <div>
        <table border="1">
            <th>ID</th>
            <th>NAME</th>
            <th>QTY</th>
            <th>PRICE</th>
            <th>DESCRIPTION</th>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>₦{{$product->price}}</td>
                <td>{{$product->description}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>