<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Category</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Category</h1>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form method="POST" action="{{route('categories.store')}}">
      @csrf
  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
    disabled="disabled">
    <div id="idHelp" class="form-text">Category Id</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
    name="name" placeholder="Category name.">
  </div>
  <label for="description">Description</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="description" aria-describedby="descriptionHelp"
    name="description" placeholder="Description">   
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{route('categories.index')}}" class="btn btn-warning">Cancel</a>
  </div>
  
</form>
</div>
  </body>
</html>