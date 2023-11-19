<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Product</title>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>    
        <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
                    disabled="disabled" value="{{ $product->id }}">
                <div id="idHelp" class="form-text">Product Id</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
                    name="name" placeholder="Name." value="{{ $product->name }}">
            </div>
           
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" required class="form-control" id="price" aria-describedby="priceHelp"
                    name="price" placeholder="Price" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" required class="form-control" id="stock" aria-describedby="stockHelp"
                    name="stock" placeholder="Stock" value="{{ $product->stock }}">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category ID</label>
                <input type="number" required class="form-control" id="category_id" aria-describedby="categoryIdHelp"
                    name="category_id" placeholder="Category ID" value="{{ $product->category_id }}">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('products.index') }}" class="btn btn-warning">Cancel</a>
            </div>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
