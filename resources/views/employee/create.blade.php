<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="{{ route('employee.store') }}" method="POST">
            @csrf
        <div class="form-group">
            <label class="">Name</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="">Email</label>
            <input type="text" name="email" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="">Password</label>
            <input type="password" name="password" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="">DOB</label>
            <input type="text" name="dob" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="">Phone</label>
            <input type="text" name="phone" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="">Address</label>
            <input type="text" name="address" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="">Department</label>
            <input type="text" name="department" id="" class="form-control">
        </div>
        <button class="btn btn-success">Add Employee</button>
        </form>
    </div>
</body>
</html>