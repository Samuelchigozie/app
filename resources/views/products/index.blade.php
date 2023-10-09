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
        @if (session()->has('success'))
        <i>{{session('success')}}</i>
        @endif
    </div><br>
    <div>
        <div>
            <a href="{{route('product.create')}}">Create new Product</a>
        </div>
        <table border="1">
            <th>ID</th>
            <th>NAME</th>
            <th>QTY</th>
            <th>PRICE</th>
            <th>DESCRIPTION</th>
            <th>EDIT</th>
            <th>DELETE</th>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>₦{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit', ['product'=> $product])}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('product.delete', ['product'=>$product])}}" method="post">
                    @csrf 
                    @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>