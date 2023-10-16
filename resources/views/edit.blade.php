<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <center>
        <h1>EDIT FORM</h1>
    </center>
    <div class="container">
        <form action="{{ route('update', ['id' => $record->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="formGroupExampleInput" class="form-label">Enter Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name"
                    placeholder="Enter Name" value="{{$record->name}}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="formGroupExampleInput2" name="image">
            </div>

            {{-- <br> --}}

            <Legend>Skills</Legend>
            <div class="form-check">
                <input class="form-check-input" name="skill[]" type="checkbox" value="java" id="flexCheckJava" {{ in_array('java',explode(',', $record->skill)) ? 'checked' : '' }} >
                <label class="form-check-label" for="flexCheckDefault">
                    Java
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="skill[]" type="checkbox" value="python" id="flexCheckPython" {{ in_array('python',explode(',', $record->skill)) ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckChecked">
                    Python
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="skill[]" type="checkbox" value="c++" id="flexCheckC++" {{ in_array('c++',explode(',', $record->skill)) ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckChecked">
                    C++
                </label>
            </div>

            <legend>Gender</legend>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="Male" name="gender" id="flexRadioDefault1" {{$record->gender === 'Male' ? 'checked' : ''}}>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="Female" name="gender" id="flexRadioDefault2" {{$record->gender === 'Female' ? 'checked' : ''}}>
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
            {{-- <br> --}}
            <legend>Select Your Country</legend>
            <select class="form-select" name="country" aria-label="Default select example">
                <option>Select Country</option>
                <option value="Mithi" {{$record->country === 'Mithi' ? 'selected' : ''}}>Mithi</option>
                <option value="Diplo" {{$record->country === 'Diplo' ? 'selected' : ''}}>Diplo</option>
                <option value="Chahro" {{$record->country === 'Chahro' ? 'selected' : ''}}>Chahro</option>
            </select><br>
            <center>
                <input class="btn btn-info text-white" type="submit" value="Edit User">
            </center>

        </form>
    </div>
</body>

</html>
