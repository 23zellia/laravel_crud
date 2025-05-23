<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
            color: #2d3748;
        }

        .container {
            max-width: 700px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
            padding: 1.5rem;
        }

        .card-header {
            background-color: #f9a8d4;
            color: #ffffff;
            text-align: center;
            padding: 1.2rem;
            border-radius: 8px 8px 0 0;
            font-weight: 600;
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .form-label {
            color: #2d3748;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-select {
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 0.6rem;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #f9a8d4;
            box-shadow: 0 0 0 0.2rem rgba(249, 168, 212, 0.2);
            outline: none;
        }

        .form-select {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #c4b5fd;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #a78bfa;
            transform: translateY(-1px);
            box-shadow: 0 3px 6px rgba(196, 181, 253, 0.3);
        }

        .btn-cancel {
            background-color: #f28b82;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 6px;
            font-weight: 500;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .btn-cancel:hover {
            background-color: #ea584f;
            transform: translateY(-1px);
            box-shadow: 0 3px 6px rgba(242, 139, 130, 0.3);
        }

        .alert-danger {
            background-color: #fef1f7;
            border: none;
            color: #2d3748;
            border-radius: 8px;
            margin: 1rem 0;
            padding: 1rem;
            animation: slideIn 0.4s ease;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 1.2rem;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 1rem;
            }

            .card {
                padding: 1rem;
            }

            .card-header {
                font-size: 1.3rem;
            }

            .btn-primary,
            .btn-cancel {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('successed'))
        <div class="alert alert-success">
            {{ session('successed') }}
        </div>
        @endif

        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Add Product</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug" value="{{ old('slug') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter description">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Enter price" step="0.01" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" name="qty" class="form-control" id="qty" placeholder="Enter quantity" value="{{ old('qty') }}">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category </label>
                        <select class="form-select" name="category_id" id="category_id">
                            <option value="" disabled selected>Select Category</option>
                            @foreach($category as $item)
                            <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Add Product</button>
                        <a href="{{ route('product.index') }}" class="btn btn-cancel"><i class="bi bi-x-circle"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
