<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Categories List</title>
  </head>
  <body>
    <div class="container">    
    <h1>Categories List</h1>    
    <a href="{{route('categories.create') }}"
    class="btn btn-success"
    >Add</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td> 
              <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                class="btn btn-info">
                Edit</a>
              <form
                  action="{{ route('categories.destroy', ['category' => $category->id]) }}"
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