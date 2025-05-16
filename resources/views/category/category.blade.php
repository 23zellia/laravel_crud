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
    @if (session('successed'))
    <div class="alert alert-success" role="alert">
        {{ session('successed') }}
      </div>

    @endif
    <a href="{{route('category.index')}}" class="btn btn-lg btn-link">Category</a>
    <a href="{{route('product.index')}}" class="btn btn-lg btn-link">Product</a>

<div class="d-flex justify-content-between mb-2">
    <a href="{{route('category.create')}}" class="btn btn-primary">Create</a>
    <form action="{{route('category.index')}}" class="col-auto d-flex gap-2 me-5" method="GET">
        <input type="text" name="search" class="form-control">
        <button type="Submit"  class="btn btn-primary">Search</button>
    </form>
</div>
    <div class="table-responsive">


    <table class="table table-bordered text-center">

        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
            @forelse ($category as $item)
          <tr>
            <td scope="row">{{$item->id}}</td>
            <td>
                @if ($item->image)
                <img width="38" src="{{ asset('image/'.$item->image) }}" alt="">
                @endif
            </td>
            <td>{{$item->name}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->description}}</td>
            <td>
                <span class="badge {{ $item->status == 1 ? 'bg-success' : 'bg-danger' }}">
                    {{ $item->status == 1 ? 'Active' : 'In-Active' }}
                </span>
            </td>
            <td class="d-flex justify-content-center gap-2">
              <a href="{{route('category.edit',$item->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</a>
              <form action="{{route('category.destroy',$item->id) }}" method="POST">
                @csrf
                @method('delete')
              <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
            </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="text-center">No Data</td>
          </tr>
          @endforelse
        </tbody>

        {{ $category->links() }}
      </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
