<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Customer</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Customer</h1>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form method="POST" action="{{route('customers.store')}}">
      @csrf
  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
    disabled="disabled">
    <div id="idHelp" class="form-text">Customer Id</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Document Number</label>
    <input type="text" required class="form-control" id="document_number" aria-describedby="document_numberHelp"
    name="document_number" placeholder="Document number.">
  </div>
  <label for="description">First Name</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="first_name" aria-describedby="first_nameHelp"
    name="first_name" placeholder="First Name">   
  </div>
  <label for="description">Last Name</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="last_name" aria-describedby="last_nameHelp"
    name="last_name" placeholder="last_name">   
  </div>
  <label for="description">Address</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="address" aria-describedby="addressHelp"
    name="address" placeholder="address">   
  </div>
  <label for="description">Birthday (AAAA-MM-DD)</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="birthday" aria-describedby="birthdayHelp"
    name="birthday" placeholder="birthday">   
  </div>
  <label for="description">Phone Number</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="phone_number" aria-describedby="phone_numberHelp"
    name="phone_number" placeholder="phone_number">   
  </div>
  <label for="description">E-mail</label>
  <div class="mb-3">
    <input type="text" required class="form-control" id="email" aria-describedby="emailHelp"
    name="email" placeholder="email">   
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{route('customers.index')}}" class="btn btn-warning">Cancel</a>
  </div>
  
</form>
</div>
  </body>
</html>