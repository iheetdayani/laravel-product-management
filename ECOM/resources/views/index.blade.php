<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management</title>
</head>

<body>
  @extends('layouts.app')
  @section('content')
    <form action="{{route("products.index")}}" method="GET">
      <div class="container mt-5">
        <label>Search Products</label>
        <input type="text" class="form-control" placeholder="search products" name="search">
        <button type="submit" class="btn btn-primary mt-2">Search</button>
      </div>
    </form>
    <div class="container mt-5 text-center">
      <a href="{{ route('products.create') }}" class="btn btn-primary mt-4">
        Add Product
      </a>
    </div>
    <div class="container text-center mt-5">
      <table class="table table-striped table-bordered table-hover">
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Description</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>

        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $product->name }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->quntity }}</td>
              <td>{{ $product->status }}</td>

              <td>
                <a href="{{ route('products.edit', $product->id) }}">
                  Edit
                </a>
              </td>

              <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endsection
</body>

</html>