<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add product</title>
</head>

<body>

  @extends('layouts.app')
  @section('content')
    @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
      </div>
    @endif
    <form action="{{route('products.store')}}" method="POST">
      @csrf
      <div class="container text-center mt-5">
        <div class="row justify-content-center">
          <h1 class="fw-bold text-center bg-gray">Add Product</h1>
          <div class="col-md-12">
            <div class="card shadow-lg">
              <div class="col-md-12 px-4">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="col-md-12 px-4">
                <label>description</label>
                <textarea name="description" class="form-control"></textarea>
              </div>
              <div class="col-md-12 px-4">
                <label>price</label>
                <input type="number" name="price" class="form-control">
              </div>
              <div class="col-md-12 px-4">
                <label>quantity</label>
                <input type="Number" name="quntity" class="form-control">
              </div>
              <div class="col-md-12 px-4">
                <label>Status</label>
                <select name="status" class="form-select">
                  <option value="STOCKIN">STOCKIN</option>
                  <option value="NOSTOCK">NOSTOCK</option>
                  <option value="OUTOFSTOCK">OUTOFSTOCK</option>
                </select>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary mt-3 mb-3">Add Product</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  @endsection
</body>


</html>