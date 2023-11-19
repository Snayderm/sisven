<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customers List</title>
  </head>
  <body>
    <div class="container">    
    <h1>Customers List</h1>    
    <a href="{{route('customers.create') }}"
    class="btn btn-success"
    >Add</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Document Number</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Birthday</th>
            <th scope="col">Phone Number</th>
            <th scope="col">E-Mail</th>            
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <th scope="row">{{ $customer->id }}</th>
            <td>{{ $customer->document_number }}</td>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->birthday }}</td>
            <td>{{ $customer->phone_number }}</td>
            <td>{{ $customer->email }}</td>
            <td> 
              <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}"
                class="btn btn-info">
                Edit</a>
              <form
                  action="{{ route('customers.destroy', ['customer' => $customer->id]) }}"
                  method='POST' style="display: inline-block">
                  @method('delete')
                  @csrf
                  <input
                  class="btn btn-danger" type="submit" value="Delete">
              </form>            
            </td>                
        </tr>
        @endforeach    
    </tbody>
    </table>
    </div>   
  </body>
</html>
