<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product page</title>
</head>
<body>
    <h1>Create a new product</h1>
    <form action="{{ route('product.store') }}" method="post">
        @csrf 
        @method('post')
        <div> 
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Product Name">
        </div>
        <br>
        <div> 
            <label>Product Qty</label>
            <input type="text" name="qty" placeholder="Enter Product Qty">
        </div>
        <br>
        <div> 
            <label>Product Price</label>
            <input type="text" name="price" placeholder="Put product price">
        </div>
        <br>
        <div> 
            <label>Description</label><br/>
            <textarea name="description"  cols="30" rows="10" placeholder="Write Product short Description"></textarea>
        </div>
        <br>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>    
</body>
</html>
