<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
    <table class="container table table-striped table-bordered">

        <tr>
     <th>Title</th>
     <td>{{ $student->title }}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{ $student->description }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $student->status  }}</td>
    </tr>
    <tr>
    </table>
