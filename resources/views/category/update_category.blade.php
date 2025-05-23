<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
        <style>
        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
            color: #2d3748;
        }

        .container {
            max-width: 600px;
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

        .form-floating label {
            color: #2d3748;
            font-weight: 500;
        }

        .form-floating input,
        .form-select {
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .form-floating input:focus,
        .form-select:focus {
            border-color: #f9a8d4;
            box-shadow: 0 0 0 0.2rem rgba(249, 168, 212, 0.2);
            outline: none;
        }

        .form-control:focus {
            border-color: #f9a8d4;
            box-shadow: 0 0 0 0.2rem rgba(249, 168, 212, 0.2);
            outline: none;
        }

        .form-select {
            padding: 0.6rem;
            font-weight: 500;
        }

        .form-label {
            color: #2d3748;
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

        .alert-success {
            background-color: #fef1f7;
            border: none;
            color: #2d3748;
            border-radius: 8px;
            margin: 1rem 0;
            padding: 1rem;
            animation: slideIn 0.4s ease;
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
    <center>
        <form action="{{route('category.update',$category->id)}}" method="POST">
            @csrf
            @method('PUT')
    <div class="card d-flex gap-3 justify-content-center w-75 ">
        <div class="card-header">
          <h1>Edit Category</h1>
        </div>
        <div class="d-flex gap-3  flex-column  card-body">
            <div class="form-floating mb-3">
                <input type="Text" name="name" class="form-control" id="floatingInput" value="{{ $category->name }}"required >
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="Text" name="slug" class="form-control" id="floatingInput"value="{{ $category->slug }}"required>
                <label for="floatingInput">Slug</label>
            </div>
            <div class="form-floating mb-3">
                <input type="Text" name="description" class="form-control" id="floatingInput"value="{{ $category->description }}"required>
                <label for="floatingInput">Decription</label>
            </div>
            <select class="form-select" name="status" aria-label="Default select example">
                <option selected>Select Status</option>
                <option value="1">Active</option>
                <option value="0">In-active</option>
            </select>
            <button type="Submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
        </form>
    </center>
</body>
</html>
