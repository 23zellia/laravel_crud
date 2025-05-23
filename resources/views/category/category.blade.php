<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
            color: #2d3748;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }
                h1 {
            background-color: #f9a8d4;
            color: #ffffff;
            text-align: center;
            padding: 1.2rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        h1:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(249, 168, 212, 0.3);
        }
        .nav-links {
            margin: 1.5rem 0;
            padding: 1rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }

        .nav-links .btn-link {
            background-color: #f9a8d4;
            color: #ffffff;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 0.6rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            text-transform: uppercase;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .nav-links .btn-link:hover {
            background-color: #c4b5fd;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 3px 6px rgba(196, 181, 253, 0.3);
        }

        .nav-links .btn-link.active {
            background-color: #f28b82;
            color: #ffffff;
            border: 1px solid #f28b82;
            box-shadow: 0 2px 4px rgba(242, 139, 130, 0.3);
        }

        .action-bar {
            background-color: #ffffff;
            padding: 1.2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-responsive {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table th {
            background-color: #f9a8d4;
            color: #ffffff;
            padding: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            border: none;
        }

        .table th:first-child {
            border-top-left-radius: 10px;
        }

        .table th:last-child {
            border-top-right-radius: 10px;
        }

        .table td {
            vertical-align: middle;
            padding: 1rem;
            border-bottom: 1px solid #e2e8f0;
            background-color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .table tbody tr {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #fef1f7;
            transform: translateY(-2px);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .category-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 6px;
            border: 2px solid #f9a8d4;
            transition: transform 0.3s ease;
        }

        .category-image:hover {
            transform: scale(1.1);
        }

        .btn-primary {
            background-color: #f9a8d4;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ec4899;
            transform: translateY(-1px);
            box-shadow: 0 3px 6px rgba(249, 168, 212, 0.3);
        }

        .btn-edit {
            background-color: #c4b5fd;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            font-weight: 500;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .btn-edit:hover {
            background-color: #a78bfa;
            transform: translateY(-1px);
            box-shadow: 0 3px 6px rgba(196, 181, 253, 0.3);
        }

        .btn-danger {
            background-color: #f28b82;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #ea584f;
            transform: translateY(-1px);
            box-shadow: 0 3px 6px rgba(242, 139, 130, 0.3);
        }

        .alert-success {
            background-color: #fef1f7;
            border: none;
            color: #2d3748;
            border-radius: 8px;
            margin: 1rem 0;
            padding: 1rem;
            animation: slideIn 0.4s ease;
        }

        .form-control {
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 0.6rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #f9a8d4;
            box-shadow: 0 0 0 0.2rem rgba(249, 168, 212, 0.2);
            outline: none;
        }

        .badge.bg-success {
            background-color: #c4b5fd !important;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 500;
        }

        .badge.bg-danger {
            background-color: #f28b82 !important;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 500;
        }

        .pagination {
            margin: 2rem 0;
            justify-content: center;
        }

        .pagination .page-link {
            border-radius: 6px;
            margin: 0 4px;
            color: #f9a8d4;
            font-weight: 500;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .pagination .page-item.active .page-link {
            background-color: #f9a8d4;
            border-color: #f9a8d4;
            color: #ffffff;
        }

        .pagination .page-link:hover {
            background-color: #f9a8d4;
            color: #ffffff;
            border-color: #f9a8d4;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .action-bar {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .table-responsive {
                font-size: 0.85rem;
            }

            .category-image {
                width: 40px;
                height: 40px;
            }

            .btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }

            .container {
                padding: 0 1rem;
            }
        }
    </style>
</head>

<body>
    @if (session('successed'))
    <div class="alert alert-success" role="alert">
        {{ session('successed') }}
      </div>

    @endif
    <h1>Category</h1>
        <div class="nav-links">
            <a href="{{route('category.index')}}" class="btn btn-lg btn-link active">Category</a>
            <a href="{{route('product.index')}}" class="btn btn-lg btn-link">Product</a>
        </div>

<div class="d-flex justify-content-between mb-2">
                <a href="{{route('category.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Create Category</a>
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
