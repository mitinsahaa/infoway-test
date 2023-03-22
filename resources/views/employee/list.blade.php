<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <table class="table table-responsive">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>DOB</th>
        </tr>
        @foreach($employee as $emp)
        <tr>
            <td>{{Auth::user()->name}}</td>
            <td>{{Auth::user()->email}}</td>
            <td>{{$emp->department}}</td>
            <td>{{$emp->dob}}</td>
            @endforeach
        </tr>
    </table>
</body>
</html>