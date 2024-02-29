<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
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
        </style>
</head>
<body>

    <ul>
        <li>ID: {{ $data['id'] }}</li>
        <li>Name: {{ $data['name'] }}</li>
        <li>Description: {{ $data['description'] }}</li>
        <li>Created At: {{ $data['created_at'] }}</li>
        <li>Updated At: {{ $data['updated_at'] }}</li>
    </ul>
</body>
</html>
