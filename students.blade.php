<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    nav .w-5{
        display: none;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                
                <h1 class="text-center mb-4">All Students List Page</h1>
                <a href="/newstudent" class="btn btn-success btn-sm mb-4">Add New</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->city }}</td>
                            <td>
                                <a href="{{ route('view.student', $student->id)}}" class="btn btn-primary btn-sm">View</a>
                            </td>
                            <td>
                                <a href="{{ route('delete.student', $student->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>     
                            <td>
                                <a href="{{route('update.page', $student->id)}}" class="btn btn-warning btn-sm">Update</a>
                            </td>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-5">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
