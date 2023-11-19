<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Pay Mode</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Pay Mode</h1>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form method="POST" action="{{route('paymodes.store')}}">
      @csrf
  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
    disabled="disabled">
    <div id="idHelp" class="form-text">Paymode Id</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" required class="form-control" id="name" aria-describedby="name"
    name="name" placeholder="Pay mode Name">
  </div>
  <label for="description">Observation</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="observation" aria-describedby="observation"
    name="observation" placeholder="Observation">   
  </div>
  
  <div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{route('paymodes.index')}}" class="btn btn-warning">Cancel</a>
  </div>
  
</form>
</div>
  </body>
</html>