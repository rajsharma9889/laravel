<?php $users = DB::table('user')->get(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">User table</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ids</th>
                <th scope="col">Vendor ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->vendor_id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->mobile}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>