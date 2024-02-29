<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Blog page</title>
    <style>
        body {
            background-color: #a8c5e3; 
            padding: 20px; 
        }

        h1 {
            color: black; 
            margin: auto; 
            text-align: center;

        }

        form {
            max-width: 400px; 
            margin: auto; 
        }
        button{
            background-color: #007bff;

        }
    </style>
</head>
<body>
    <h1>ADD BLOG</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Blog Title</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="">
        </div>
            <div class="mb-3">
            <label for="description" class="form-label">Blog Description</label>
            <textarea type="description" class="form-control" rows="4" cols="50" name="description" id="description" placeholder="" ></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="image" id="image" placeholder="">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
