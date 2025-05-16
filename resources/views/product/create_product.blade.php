<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <div class="card d-flex gap-3 justify-content-center w-50 h-auto mx-auto">
        <div class="card-header">
          <h1>Add Product</h1>

    <form class="row g-2">
        <div class="col-md-6 mx-3">
            <label for="name" class="form-label">Product Name:</label>
          <input type="text" name="name" class="form-control" >

        </div>
        <div class="col-md-6 mx-3">
            <label for="slug" class="form-label">Slug</label>
          <input type="text" name="slug" class="form-control">

        </div>
        <div class="col-md-6 mx-3">
            <label for="desc" class="form-label">Description</label>
          <input type="text" name="desc" class="form-control" >

        </div>
        <div class="col-md-6 mx-3">
            <label for="price" class="form-label">Price</label>
          <input type="integer" name="price" class="form-control" >

        </div>
        <div class="col-md-6 mx-3">
          <label for="qty" class="form-label">Quality</label>
          <input type="integer" name="qty" class="form-control" >
        </div>
        <div class="mx-3 mt-3">
        <label>Category:</label>
        <select class="form-select d-flex " name="category_id">
            <option value="">Select Category</option>
            @foreach($category as $item)
                <option value="{{ $item->id }}">{{ $item->name}}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary mx-3 mt-3 ">Add Product</button>
    </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
