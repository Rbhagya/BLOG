<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #a8c5e3;
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a href="/user/form" class="btn btn-light">ADD BLOG</a>
      </li>
      <li class="nav-item">
      <a href="/user/show" class="btn btn-light">Blog</a>
      </li>
    
    </ul>
    
  </div>
</nav>
<br>
<h1>Blog</h1>


<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Blog Title</th>
        <th scope="col">User</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>BOPPO</td>
            <td><a href="/user/show/{{ $item->id }}" class="btn btn-secondary">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
