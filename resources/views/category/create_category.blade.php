<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
    <div class="card d-flex gap-3 justify-content-center w-75 ">
        <div class="card-header">
          <h1>Create Category</h1>
        </div>
        <div class="d-flex gap-3  flex-column  card-body">
            <div class="form-floating mb-3">
                <input type="Text" name="name" class="form-control" id="floatingInput">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="Text" name="slug" class="form-control" id="floatingInput">
                <label for="floatingInput">Slug</label>
            </div>
            <div class="form-floating mb-3">
                <input type="Text" name="description" class="form-control" id="floatingInput">
                <label for="floatingInput">Decription</label>
            </div>
            <select class="form-select" name="status" aria-label="Default select example">
                <option selected>Select Status</option>
                <option value="1">Active</option>
                <option value="0">In-active</option>
            </select>
            <div class="mb-3">
                <label for="formFile" class="form-label"></label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div>
            <button type="Submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
        </form>
    </center>
</body>
</html>
