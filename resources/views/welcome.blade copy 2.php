<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Eloquent CRUD</h2>
                <h3>All Users Data</h3>

                <a href="" class="btn btn-success btn-sm mb-3">Add New</a>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->city }}</td>
                            <td><a href="" class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>
