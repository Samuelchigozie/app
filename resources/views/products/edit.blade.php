<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product page</title>
</head>
<body>
    <h1>Update product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('product.update', ['product'=>$product])}}" method="post">
        @csrf 
        @method('put')
        <div> 
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Product Name" value="{{$product->name}}">
        </div>
        <br>
        <div> 
            <label>Product Qty</label>
            <input type="text" name="qty" placeholder="Enter Product Qty" value="{{$product->qty}}">
        </div>
        <br>
        <div> 
            <label>Product Price</label>
            <input type="text" name="price" placeholder="Put product price" value="{{$product->price}}">
        </div>
        <br>
        <div> 
            <label>Description</label><br/>
            <textarea name="description" cols="30" rows="10">{{$product->description}}</textarea>
        </div>
        <br>
        <div>
            <input type="submit" value="Update the Product">
        </div>
    </form>    
</body>
</html>
