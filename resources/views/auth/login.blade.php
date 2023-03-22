<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form><br>
        <a class="btn btn-success" href="{{route('register')}}">Signup</a>
    </div>
</body>
</html>