<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form action="{{ route('register.post') }}" method="POST">
        @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Signup</button>
    </form>
    </div>
</body>
</html>