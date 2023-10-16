<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<center>
    <h1>USER DETAILS</h1>
    <a class="float-right btn btn-info" href="{{ route('store') }}">ADD USER</a>
</center>

<body>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Skill</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Country</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $record)
                    <tr>
                        <td scope = "row">{{ $record->id }}</td>
                        <td>{{ $record->name }}</td>
                        <td><img src="assets/images/{{ $record->image }}" height="10%" width="10%" alt="">
                        </td>
                        <td>{{ $record->skill }}</td>
                        <td>{{ $record->gender }}</td>
                        <td>{{ $record->country }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>{{ $record->updated_at }}</td>
                        <td class="d-flex justify-content-between">
                            <form action="{{ url('edit/' . $record->id) }}" method="GET">
                                @csrf <!-- CSRF Token -->
                                @method('GET') <!-- Spoof the DELETE method -->
                                <button type="submit" class="btn btn-primary btn-sm">EDIT</button>
                            </form>
                            <form action="{{ url('delete/' . $record->id) }}" method="POST">
                                @csrf <!-- CSRF Token -->
                                @method('DELETE') <!-- Spoof the DELETE method -->
                                <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                            </form>
                            {{-- <a href=""></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
